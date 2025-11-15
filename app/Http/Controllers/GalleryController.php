<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\StreamedResponse;

class GalleryController extends Controller
{
    public function index()
    {
        $dir = $this->galleryPath();
        $images = [];
        $videos = [];

        if (File::exists($dir) && is_dir($dir)) {
            $all = File::files($dir);
            usort($all, function ($a, $b) {
                return strcmp($a->getFilename(), $b->getFilename());
            });

            foreach ($all as $f) {
                $ext = strtolower($f->getExtension());
                $name = $f->getFilename();
                $url = asset('images/gallery/' . $name);

                if (in_array($ext, ['mp4', 'webm', 'ogg'])) {
                    $basename = pathinfo($name, PATHINFO_FILENAME);
                    $poster = null;
                    foreach (['jpg', 'jpeg', 'png', 'webp'] as $pext) {
                        $candidate = $dir . DIRECTORY_SEPARATOR . $basename . '.' . $pext;
                        if (File::exists($candidate)) {
                            $poster = asset('images/gallery/' . $basename . '.' . $pext);
                            break;
                        }
                    }
                    $videos[] = ['name' => $name, 'url' => $url, 'type' => 'video', 'poster' => $poster];
                } else {
                    $images[] = ['name' => $name, 'url' => $url, 'type' => 'image'];
                }
            }
        }

        return view('gallery', compact('images', 'videos'));
    }

    public function stream($file)
    {
        $safe = basename($file);
        $dir = $this->galleryPath();
        $path = $dir . DIRECTORY_SEPARATOR . $safe;

        if (!File::exists($path)) {
            abort(404);
        }

        $size = filesize($path);
        $mime = File::mimeType($path) ?: 'application/octet-stream';

        $start = 0;
        $end = $size - 1;
        $status = 200;
        $headers = [
            'Content-Type' => $mime,
            'Accept-Ranges' => 'bytes',
        ];

        if (isset($_SERVER['HTTP_RANGE'])) {
            if (preg_match('/bytes=(\d+)-(\d*)/', $_SERVER['HTTP_RANGE'], $matches)) {
                $start = intval($matches[1]);
                if (isset($matches[2]) && $matches[2] !== '') {
                    $end = intval($matches[2]);
                }
                if ($end > $size - 1) $end = $size - 1;
                if ($start > $end) {
                    return response('', 416);
                }
                $status = 206;
                $headers['Content-Range'] = "bytes $start-$end/$size";
            }
        }

        $length = $end - $start + 1;
        $headers['Content-Length'] = $length;

        $response = new StreamedResponse(function () use ($path, $start, $end) {
            $fp = fopen($path, 'rb');
            if ($fp === false) {
                return;
            }
            fseek($fp, $start);
            $remaining = $end - $start + 1;
            $buffer = 1024 * 16;
            while ($remaining > 0 && !feof($fp)) {
                $read = ($remaining > $buffer) ? $buffer : $remaining;
                echo fread($fp, $read);
                flush();
                $remaining -= $read;
            }
            fclose($fp);
        }, $status, $headers);

        return $response;
    }

    protected function galleryPath()
    {
        $candidates = [
            public_path('images/gallery'),
            dirname(base_path()) . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'gallery',
        ];

        foreach ($candidates as $p) {
            if (File::exists($p) && is_dir($p)) {
                return $p;
            }
        }

        return public_path('images/gallery');
    }
}

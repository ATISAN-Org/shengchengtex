<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    public function index()
    {
        $dir = public_path('images/gallery');
        $files = [];
        $images = [];
        $videos = [];

        if (File::exists($dir)) {
            $all = File::files($dir);
            // sort by filename to keep stable ordering
            usort($all, function ($a, $b) {
                return strcmp($a->getFilename(), $b->getFilename());
            });

            foreach ($all as $f) {
                $ext = strtolower($f->getExtension());
                $name = $f->getFilename();
                $url = asset('images/gallery/' . $name);
                if (in_array($ext, ['mp4', 'webm', 'ogg'])) {
                    // try to find a poster image with same basename (jpg/png/jpeg/webp)
                    $basename = pathinfo($name, PATHINFO_FILENAME);
                    $poster = null;
                    foreach (['jpg','jpeg','png','webp'] as $pext) {
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
}

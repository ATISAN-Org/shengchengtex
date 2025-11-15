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

        if (File::exists($dir)) {
            $all = File::files($dir);
            foreach ($all as $f) {
                $ext = strtolower($f->getExtension());
                $name = $f->getFilename();
                $url = asset('images/gallery/' . $name);
                $type = in_array($ext, ['mp4', 'webm', 'ogg']) ? 'video' : 'image';
                $files[] = [
                    'name' => $name,
                    'url' => $url,
                    'type' => $type,
                ];
            }
        }

        return view('gallery', compact('files'));
    }
}

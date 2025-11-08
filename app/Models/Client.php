<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'testimonial',
        'type',
        'bangladeshi_role'
    ];

    // Accessor for client image URL
    public function getImageUrlAttribute()
    {
        $img = $this->image;
        $placeholder = asset('images/no-image.png');

        if (!$img) {
            return $placeholder;
        }

        $relative = ltrim($img, '/');

        if (file_exists(public_path($relative))) {
            return asset($relative);
        }

        if (file_exists(storage_path('app/public/' . $relative))) {
            return asset('storage/' . $relative);
        }

        if (isset($_SERVER['DOCUMENT_ROOT']) && $_SERVER['DOCUMENT_ROOT']) {
            $docPath = rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/' . $relative;
            if (file_exists($docPath)) {
                return url('/' . $relative);
            }
        }

        if (\Illuminate\Support\Str::startsWith($img, ['http://', 'https://'])) {
            return $img;
        }

        return $placeholder;
    }
}
// option
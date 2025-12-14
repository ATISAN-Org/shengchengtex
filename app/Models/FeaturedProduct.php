<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturedProduct extends Model
{
    use HasFactory;

    protected $table = 'featured_products';

    protected $fillable = [
        'name',
        'category_id',
        'price',
        'image',
        'composition',
        'color',
        'width',
        'reference_no',
        'fabric_name',
        'type',
        'samples',
        'origin',
        'moq',
        'export',
        'weight',
        'package',
        'capacity',
        'format',
        'payment_terms',
        'delivery_time',
        'port_in_bd',
        'basic_info',
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

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

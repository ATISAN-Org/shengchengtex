<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'price' => 'decimal:2',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'name',
        'email',
        'phone',
        'subject',
        'message',
    ];

    // Relation to Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

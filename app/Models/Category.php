<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Allow mass assignment for these fields
    protected $fillable = ['name', 'description', 'image'];

    // One category has many products
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

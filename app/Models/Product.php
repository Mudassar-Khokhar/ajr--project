<?php

// app/Models/Product.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'discount_price', 
        'category', 'image', 'is_featured'
    ];

    public function getFinalPriceAttribute()
    {
        return $this->discount_price ?? $this->price;
    }

    public function scopeCategory($query, $category)
    {
        return $query->where('category', $category);
    }
}
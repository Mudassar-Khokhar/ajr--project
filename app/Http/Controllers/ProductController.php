<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // Remove the is_active condition since it doesn't exist in your database
        $windows = Product::where('category', 'windows')->get();
        $doors = Product::where('category', 'doors')->get();
        
        return view('products.index', compact('windows', 'doors'));
    }
}
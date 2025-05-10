<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

abstract class Controller
{
    //
}


Route::get('/home', function () {
    return view('home'); // This loads the 'home.blade.php' file
});

Route::get('/products', function () {
    return view('products'); // This loads the 'products.blade.php' file
});

Route::get('/categories', function () {
    return view('categories'); // This loads the 'categories.blade.php' file
});

Route::get('/offers', function () {
    return view('offers'); // This loads the 'offers.blade.php' file
});

Route::get('/about', function () {
    return view('about'); // This loads the 'about.blade.php' file
});

Route::get('/all', function () {
    return view('all'); // This loads the 'all.blade.php' file
});


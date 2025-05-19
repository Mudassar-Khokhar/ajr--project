<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\ContactAdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;

Route::get('/', function () { return view('landingpage');})->name('landingpage');
Route::get('/home', function () { return view('home');})->name('home');
Route::get('/about', function () { return view('about');})->name('about');
Route::get('/category', function () { return view('category');})->name('category');

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Password Reset Routes
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])
    ->name('password.email');

Route::post('/reset-password', [ForgotPasswordController::class, 'resetPassword'])
    ->name('password.update');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->name('password.reset');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');



    Route::get('/admin/contact', [ContactAdminController::class, 'contactIndex'])->name('admin.contact');
    Route::delete('/admin/contact/{contact}', [ContactAdminController::class, 'contactDestroy'])->name('admin.contact.destroy');


    Route::get('/admin/users', [ContactAdminController::class, 'userIndex'])->name('admin.user');
    Route::delete('/admin/users/{id}', [ContactAdminController::class, 'userDestroy'])->name('admin.user.destroy');
    
// For admin routes
Route::prefix('admin')->name('admin.')->group(function() {
    Route::resource('products', AdminProductController::class)->except(['show']);
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Cart routes
Route::prefix('cart')->group(function () {
    Route::post('/add', [CartController::class, 'add'])->name('cart.add');
    Route::post('/buy-now', [CartController::class, 'buyNow'])->name('cart.buy-now');
    Route::get('/', [CartController::class, 'index'])->name('cart.index');
    Route::post('/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
    Route::get('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
    Route::post('/process', [CartController::class, 'process'])->name('cart.process');
});
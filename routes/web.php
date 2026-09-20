<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contacts');
Route::get('/about-us', [HomeController::class, 'about'])->name('abouts');
Route::get('/products', [HomeController::class, 'product'])->name('products');
Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('wishlist');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/reset-password', [HomeController::class, 'resetPassword'])->name('reset-password');
Route::get('/carts', [HomeController::class, 'cart'])->name('carts');
Route::get('/payments', [HomeController::class, 'payment'])->name('payments');
Route::get('/orders', [HomeController::class, 'order'])->name('orders');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
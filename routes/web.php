<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


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

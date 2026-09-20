<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    dd('Admin Dashboard');
})->name('admin.dashboard');


Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth:admin', 'verified'])->name('dashboard');
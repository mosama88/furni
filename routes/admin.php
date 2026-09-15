<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
   dd('Admin Dashboard');
})->name('admin.dashboard');

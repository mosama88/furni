<?php

use App\Http\Controllers\Dashboard\HomeController;
use Illuminate\Support\Facades\Route;




Route::middleware(['auth:admin', 'verified'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
});


Route::get('/ok', function () {
    dd('OK OK');
});


require __DIR__ . '/admin-auth.php';
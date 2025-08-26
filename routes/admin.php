<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

// unlogged admin routes
Route::prefix('admin')->name('admin.')->group(function () {
    
    Route::get('/exemplo', [HomeController::class, 'example'])->name('example');

});

// logged admin routes
Route::prefix('admin')->middleware(['admin.auth'])->name('admin.')->group(function () {
    
    Route::get('/', [HomeController::class, 'index'])->name('home');
    
});
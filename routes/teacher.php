<?php

use App\Http\Controllers\Teachers\HomeController;
use Illuminate\Support\Facades\Route;

// unlogged teacher routes
Route::prefix('professor')->name('teacher.')->group(function () {
    
    Route::get('/exemplo', [HomeController::class, 'example'])->name('example');

});

// logged teacher routes
Route::prefix('professor')->middleware(['teacher.auth'])->name('teacher.')->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');
    
});

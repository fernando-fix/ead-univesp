<?php

use App\Http\Controllers\Students\HomeController;
use Illuminate\Support\Facades\Route;

// unlogged student routes
Route::prefix('aluno')->name('student.')->group(function () {

    Route::get('/exemplo', [HomeController::class, 'example'])->name('example');

});

// logged teacher routes
Route::prefix('aluno')->middleware(['student.auth'])->name('student.')->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');
    
});

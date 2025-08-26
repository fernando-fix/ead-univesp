<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login_action']);
Route::any('/logout', [AuthController::class, 'logout_action']);

Route::get('/cadastro', [AuthController::class, 'register']);
Route::post('/cadastro', [AuthController::class, 'register_action']);

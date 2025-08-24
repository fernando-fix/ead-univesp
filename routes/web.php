<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Web/Pages/Home');
});

Route::get('/admin', function () {
    return Inertia::render('Admin/Pages/Example');
});

Route::get('/teachers', function () {
    return Inertia::render('Teachers/Pages/Example');
});

Route::get('/students', function () {
    return Inertia::render('Students/Pages/Example');
});

Route::get('/login', function () {
    return Inertia::render('Web/Pages/Auth/Login');
});
Route::post('/login', function (Illuminate\Http\Request $request) {
    dd($request->all());
});

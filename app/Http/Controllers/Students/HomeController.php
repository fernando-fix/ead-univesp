<?php

namespace App\Http\Controllers\Students;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Inertia\Inertia;

class HomeController extends Controller
{
    // logged student routes
    public function index()
    {
        return Inertia::render('Students/Pages/Home');
    }

    // unlogged student routes
    public function example() {
        return Inertia::render('Students/Pages/Example');
    }
}

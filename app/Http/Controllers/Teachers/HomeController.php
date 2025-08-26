<?php

namespace App\Http\Controllers\Teachers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Inertia\Inertia;

class HomeController extends Controller
{
    // logged teacher routes
    public function index()
    {
        return Inertia::render('Teachers/Pages/Home');
    }

    // unlogged teacher routes
    public function example() {
        return Inertia::render('Teachers/Pages/Example');
    }
}

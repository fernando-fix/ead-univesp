<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Inertia\Inertia;

class HomeController extends Controller
{
    // logged admin routes
    public function index()
    {
        return Inertia::render('Admin/Pages/Home');
    }

    // unlogged admin routes
    public function example() {
        return Inertia::render('Admin/Pages/Example');
    }
}

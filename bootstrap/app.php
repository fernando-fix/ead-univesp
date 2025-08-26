<?php

use App\Http\Middleware\AdminAuthMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\HandleInertiaRequests;
use App\Http\Middleware\StudentAuthMiddleware;
use App\Http\Middleware\TeacherAuthMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: [
            __DIR__ . '/../routes/web.php',
            __DIR__ . '/../routes/auth.php',
            __DIR__ . '/../routes/admin.php',
            __DIR__ . '/../routes/teacher.php',
            __DIR__ . '/../routes/student.php',
        ],
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web(append: [
            HandleInertiaRequests::class,
        ]);
        $middleware->alias([
            'admin.auth' => AdminAuthMiddleware::class,
            'teacher.auth' => TeacherAuthMiddleware::class,
            'student.auth' => StudentAuthMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();

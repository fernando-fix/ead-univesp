<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Inertia\Inertia;

class AuthController extends Controller
{
    /**
     * Shows the login page to the user.
     *
     * @return \Inertia\Response
     */
    public function login()
    {
        return Inertia::render('Web/Pages/Auth/Login');
    }

    /**
     * Handle login for admin, student, and teacher using a single endpoint.
     */
    public function login_action(Request $request)
    {
        $validated = $request->validate([
            'type' => ['required', Rule::in(['admin', 'student', 'teacher'])],
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $guard = $validated['type'];

        $attempted = Auth::guard($guard)->attempt([
            'email' => $validated['email'],
            'password' => $validated['password'],
        ], remember: false);

        if (!$attempted) {
            return back()
                ->withErrors(['email' => 'Credenciais inválidas para o tipo escolhido.'])
                ->onlyInput('email', 'type');
        }

        $request->session()->regenerate();

        return match ($guard) {
            'admin' => redirect()->route('admin.home'),
            'student' => redirect()->route('student.home'),
            'teacher' => redirect()->route('teacher.home'),
        };
    }

    /**
     * Logout from whichever guard is authenticated.
     */
    public function logout_action(Request $request)
    {
        foreach (['admin', 'student', 'teacher', 'web'] as $guard) {
            if (Auth::guard($guard)->check()) {
                Auth::guard($guard)->logout();
            }
        }

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function register()
    {
        return Inertia::render('Web/Pages/Auth/Register');
    }

    public function register_action(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $student = Student::where('email', $validated['email'])->first();

        if ($student) {
            return back()
                ->withErrors(['email' => 'Email já cadastrado.'])
                ->onlyInput('email');
        }

        $student = Student::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password'])
        ]);

        Auth::guard('student')->login($student);

        return redirect()->route('student.home');
    }
}

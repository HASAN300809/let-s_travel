<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;





// login
class AuthController extends Controller
{

    // Menampilkan form register
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Proses register
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Buat user baru
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Login user secara otomatis setelah register
        Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        return redirect()->route('login')->with('success', 'Welcome to your dashboard!');
    }
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    

    // Proses login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('/')->with('success', 'Login successful!');
        }

        return back()->withErrors(['email' => 'Invalid email or password.'])->withInput();
    }

    // Proses logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success', 'You have been logged out.');
    }
}

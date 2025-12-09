<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin() {
        if(auth()->check()) return redirect()->route('home');
        return view('authentication.login');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($request->only('email','password'))) {
            return redirect()->route('home')->with('status', '✅ Successfully logged in!');
        }

        return back()->withErrors(['email' => '❌ Invalid credentials']);
    }

    public function showRegister() {
        if(auth()->check()) return redirect()->route('home');
        return view('authentication.register');
    }

    public function register(Request $request) {
        $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('login.form')->with('status', '✅ Registration successful! Please login.');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('welcome')->with('status', '⚡ Logged out.');
    }
}
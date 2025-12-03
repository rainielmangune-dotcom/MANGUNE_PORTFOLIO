<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});

// Registration Routes
Route::get('register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('register', [AuthController::class, 'register'])->name('register');

// Login Routes
Route::get('login', [AuthController::class, 'showLogin'])->name('login.form');
Route::post('login', [AuthController::class, 'login'])->name('login.submit');

// Contact Form
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Optional login route
Route::post('/login-submit', [AuthController::class, 'login'])->name('loginhome.form');

// Admin Login
Route::get('/admin/login', function () {
    return view('authentication.AdminLogin'); 
})->name('admin.login');

// Dashboard Route
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;

// Landing page
Route::get('/', function() {
    return view('welcome');
})->name('welcome');

// Auth routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Protected portfolio routes
Route::middleware('auth')->group(function() {
    Route::get('/home', function() {
        return view('portfolio');
    })->name('home');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
});
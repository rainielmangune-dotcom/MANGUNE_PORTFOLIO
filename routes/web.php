<?php

use App\Http\Controllers;

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
});

Route::get('register', [AuthController::'showRegister'])->name('register');
Route::post('register',[AuthController::'register'])->name('register');

Route::get('login',[AuthController::'showLogin'])->name('login.form');
Route::post('login',[AuthController::'login'])->name('login.form');

Route::get('login',[AuthController::'showLogin'])->name('login.form');


<?php

use Illuminate\Support\Facades\Route;

//This file is intended for Authentication (Login, Register, Logout, etc.)

Route::get('/', function () {
    return view('auth.login');
})->name('login');
//Kindly Modify this with authentication functions (Controllers) and Add Controllers

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('forgot-password');

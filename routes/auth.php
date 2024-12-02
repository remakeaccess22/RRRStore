<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;

use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

// Register Routes
Route::get('/register', [UserController::class, 'create'])->name('register');
Route::post('/register', [UserController::class, 'store'])->name('register.store');

// Login Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');

// Add the 'auth' middleware to the dashboard route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

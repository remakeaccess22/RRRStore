<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


require __DIR__ . '/auth.php';

// Public routes
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth')->name('logout');

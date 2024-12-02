<?php

use App\Http\Controllers\ApplicantsController;
use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

//Nav Links Routes
Route::get('inventory', function () {
    return view('inventory.index');
})->name('inventory');

Route::get('sales', function () {
    return view('sales.index');
})->name('sales');

// Personnel Routes
Route::prefix('personnel')->group(function () {
    Route::get('applicants', function () {
        return view('personnel.applicants.index');
    })->name('personnel.applicants');

    Route::get('employees', function () {
        return view('personnel.employees.index');
    })->name('personnel.employees');
});

Route::get('archived/employees', function () {
    return view('archived.employees');
})->name('archived.employees');

Route::get('archived/products', function () {
    return view('archived.products');
})->name('archived.products');

// Routes for Applicants and Employees
Route::get('/applicants', [ApplicantsController::class, 'index'])->name('personnel.applicants');
Route::get('/employees', [EmployeesController::class, 'index'])->name('personnel.employees');

// Include auth routes
require __DIR__ . '/auth.php';

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

<?php

use Illuminate\Support\Facades\Route;

//This Routes is intended for the main application (Inventory Management and Sales)
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

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

require __DIR__ . '/auth.php';

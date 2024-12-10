<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\ApplicantsController;
use App\Http\Controllers\ArchivedEmployeesController;
use App\Http\Controllers\ArchivedProductsController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\SalesController;
use Illuminate\Support\Facades\Route;

// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [UserController::class, 'create'])->name('register');
    Route::post('/register', [UserController::class, 'store'])->name('register.store');
});

// Authenticated Routes
Route::middleware(['auth'])->group(function () {
    // Authenticated Routes (Only admins and employees)
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Inventory Routes
    Route::prefix('inventory')->group(function () {
        Route::get('/', [InventoryController::class, 'index'])->name('inventory');
        Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory.index');

        Route::get('/create', action: [InventoryController::class, 'create'])->name('inventory.create');
        Route::post('/create', action: [InventoryController::class, 'create'])->name('inventory.store');
        
        Route::post('/inventory/store', [InventoryController::class, 'store'])->name('inventory.store');


        Route::get('/edit/{id}', [InventoryController::class, 'edit'])->name('inventory.edit');
        Route::get('/view/{id}', [InventoryController::class, 'view'])->name('inventory.view');
    });

    // Sales Routes
    Route::prefix('sales')->group(function () {
        Route::get('/', [SalesController::class, 'index'])->name('sales');
        Route::get('/create', [SalesController::class, 'create'])->name('sales.create');
    });

    // Personnel Routes
    Route::prefix('personnel')->group(function () {
        Route::get('applicants', [ApplicantsController::class, 'index'])->name('personnel.applicants');

        Route::post('/applicants/approve/{id}', [ApplicantsController::class, 'approve'])->name('applicants.approve');
        Route::put('/applicants/remove/{id}', [ApplicantsController::class, 'remove'])->name('applicants.remove');        
        

        Route::get('employees', [EmployeesController::class, 'index'])->name('personnel.employees');

        Route::post('/employees/promote/{id}', [EmployeesController::class, 'promote'])->name('employees.promote');
        Route::put('/employees/remove/{id}', [EmployeesController::class, 'remove'])->name('employees.remove');
    });

    // Archived Routes
    Route::prefix('archived')->group(function () {
        Route::get('/employees', [ArchivedEmployeesController::class, 'index'])->name('archived.employees');
        Route::get('/products', [ArchivedProductsController::class, 'index'])->name('archived.products');
    });
});
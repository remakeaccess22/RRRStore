<?php
use App\Http\Controllers\ApplicantsController;
use App\Http\Controllers\ArchivedEmployeesController;
use App\Http\Controllers\ArchivedProductsController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\SalesController;
use Illuminate\Support\Facades\Route;

//Nav Links Routes
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

Route::get('archived/employees', function () {
    return view('archived.employees');
})->name('archived.employees');

Route::get('archived/products', function () {
    return view('archived.products');
})->name('archived.products');

//Routes for Applicants and Employees
Route::get('/applicants', [ApplicantsController::class, 'index'])->name('personnel.applicants');
Route::get('/employees', [EmployeesController::class, 'index'])->name('personnel.employees');

//Routes for Inventory
Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory');
Route::get('/inventory/create', [InventoryController::class, 'create'])->name('inventory.create');

//Sample Routing for Sales
Route::get('/sales', [SalesController::class, 'index'])->name('sales');
Route::get('/sales/create', [SalesController::class, 'create'])->name('sales.create');

//Routes for Archived Employees and Products
Route::get('/archived/employees', [ArchivedEmployeesController::class, 'index'])->name('archived.employees');
Route::get('/archived/products', [ArchivedProductsController::class, 'index'])->name('archived.products');

// Route::get('/sales/{id}/details', [SalesController::class, 'details'])->name('sales.details');
// Route::delete('/sales/{id}', [SalesController::class, 'destroy'])->name('sales.destroy');

require __DIR__ . '/auth.php';

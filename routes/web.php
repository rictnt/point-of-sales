<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'admin.dashboard');

Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->as('admin.')->group(function(){
    Route::resources([
        // 'invoices' => InvoicesController::class,
        'categories' => CategoryController::class,
        'brands' => BrandController::class,
        'units' => UnitController::class,
        'products' => ProductController::class,
        'customers' => CustomerController::class,
        'suppliers' => SupplierController::class,
        'users' => UserController::class,
        'permissions' => PermissionController::class,
    ]); 
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

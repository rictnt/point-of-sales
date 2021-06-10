<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'admin.dashboard');

Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->as('admin.')->group(function(){
    Route::resources([
        // 'invoices' => InvoicesController::class,
        'categories' => CategoryController::class,
        // 'products' => ProductController::class,
        'customers' => CustomerController::class,
        'suppliers' => SupplierController::class,
        'users' => UserController::class,
        'permissions' => PermissionController::class,
    ]); 
});
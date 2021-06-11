<?php

use Illuminate\Support\Facades\Route;


Route::resources([
    // 'invoices' => InvoicesController::class,
    'categories' => CategoryController::class,
    // 'products' => ProductController::class,
    'customers' => CustomerController::class,
    'suppliers' => SupplierController::class,
    'users' => UserController::class,
    'permissions' => PermissionController::class,
]);

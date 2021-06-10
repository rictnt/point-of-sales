<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'admin.dashboard');

Route::prefix('admin')->resources([
    // 'invoices' => App\Http\Controllers\Admin\InvoicesController::class,
    'categories' => App\Http\Controllers\Admin\CategoryController::class,
    // 'products' => App\Http\Controllers\Admin\ProductController::class,
    // 'customers' => App\Http\Controllers\Admin\CustomerController::class,
]);
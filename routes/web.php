<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'admin.dashboard');

Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->as('admin.')->group(function(){
    Route::resources([
        // 'invoices' => App\Http\Controllers\Admin\InvoicesController::class,
        'categories' => CategoryController::class,
        // 'products' => App\Http\Controllers\Admin\ProductController::class,
        // 'customers' => App\Http\Controllers\Admin\CustomerController::class,
    ]); 
});
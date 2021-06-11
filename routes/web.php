<?php

use Illuminate\Support\Facades\Route;


<<<<<<< HEAD
Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->as('admin.')->group(function(){
    Route::resources([
        // 'invoices' => InvoicesController::class,
        'categories' => CategoryController::class,
        // 'products' => ProductController::class,
        'customers' => CustomerController::class,
        'suppliers' => SupplierController::class,
        'users' => UserController::class,
        'expense_categories' => ExpenseCategoryController::class,
        'expenses' => ExpenseController::class,
    ]); 
});
=======
// all public routes here

Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index']);


// ALL ADMIN ROUTES ARE SHIFTED TO routes/admin.php
>>>>>>> 0ddce5266f4f2c1575b0146be18c87ca7d0a1369

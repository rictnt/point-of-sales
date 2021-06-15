<?php

use Illuminate\Support\Facades\Route;

Route::get('invoices/settings', [App\Http\Controllers\Admin\InvoiceController::class, 'settings'])->name('invoices.settings');

Route::resources([
    'invoices' => InvoiceController::class,
    'categories' => CategoryController::class,
    'products' => ProductController::class,
    'brands' => BrandController::class,
    'units' => UnitController::class,
    'customers' => CustomerController::class,
    'suppliers' => SupplierController::class,
    'users' => UserController::class,
    'banks' => BankController::class,
    'transactions' => TransactionController::class,
    'permissions' => PermissionController::class,
    'expense_categories' => ExpenseCategoryController::class,
    'expenses' => ExpenseController::class,
    'settings' => SettingController::class,
]);

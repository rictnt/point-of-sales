<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'admin.dashboard');

Route::resources([
    'categories' => App\Http\Controllers\Admin\CategoryController::class,
]);
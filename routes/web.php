<?php

use Illuminate\Support\Facades\Route;


// all public routes here



Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index']);


// ALL ADMIN ROUTES ARE SHIFTED TO routes/admin.php
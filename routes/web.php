<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index']);


Route::get('link', function () {
    Artisan::call('storage:link');
    notify()->info('Storage link generated successfully...');
    return redirect('/');
});

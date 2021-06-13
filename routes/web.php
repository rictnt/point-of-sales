<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'admin.dashboard');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

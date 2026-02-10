<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Admin Panel
//Dashboard
Route::get('admin-dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
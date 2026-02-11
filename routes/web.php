<?php

use App\Http\Controllers\Admin\BukuController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Admin Panel
// Dashboard
Route::get('admin-dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
// Master Data
Route::resource('buku', BukuController::class);
Route::resource('kategori', KategoriController::class);

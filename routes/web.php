<?php

use App\Http\Controllers\Admin\BukuController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Admin Panel
Route::prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Master Data
    Route::resources([
        'buku' => BukuController::class,
        'kategori' => KategoriController::class,
    ]);
});

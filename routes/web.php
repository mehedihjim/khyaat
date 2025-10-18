<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;

// Admin protected routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/ky-admin', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
});

require __DIR__.'/auth.php';

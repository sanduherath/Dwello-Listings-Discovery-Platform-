<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [\App\Http\Controllers\DashboardController::class, 'admin'])
        ->middleware('role:Admin')->name('admin.dashboard');

    Route::get('/user/dashboard', [\App\Http\Controllers\DashboardController::class, 'user'])
        ->middleware('role:User')->name('user.dashboard');

    Route::get('/profile', [\App\Http\Controllers\DashboardController::class, 'profile'])->name('profile');
});

require __DIR__ . '/auth.php';

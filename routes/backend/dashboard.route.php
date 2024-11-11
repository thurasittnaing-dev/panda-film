<?php

use App\Http\Controllers\Backend\DashboardController;


// Main Dashboard
Route::get('dashboard', [DashboardController::class, 'main'])->name('dashboard');

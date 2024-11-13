<?php

use Illuminate\Support\Facades\Route;

// Authentication Route
Auth::routes(['register' => false, 'reset' => false, 'verify' => false, 'login' => true]);

// Frontend Routes
foreach (glob(__DIR__ . "/frontend/*.route.php") as $route) require $route;

// Backend Routes
Route::middleware('auth:web')->prefix('admin')->group(function () {
    foreach (glob(__DIR__ . "/backend/*.route.php") as $route) require $route;
});

<?php

use Illuminate\Support\Facades\Route;

// Redirect
Route::permanentRedirect('/', '/login');

// Authentication Route
Auth::routes(['register' => false, 'reset' => false, 'verify' => false, 'login' => true]);


// Backend Routes
Route::middleware('auth:web')->group(function () {
    foreach (glob(__DIR__ . "/backend/*.route.php") as $route) require $route;
});

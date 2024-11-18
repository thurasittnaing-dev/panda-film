<?php

use App\Http\Controllers\Backend\UserController;

// User Routes
Route::resource('users', UserController::class)->except(['show']);

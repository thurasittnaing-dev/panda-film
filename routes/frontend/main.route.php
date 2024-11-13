<?php

use App\Http\Controllers\Frontend\PageController;

// Home Page
Route::get('/', [PageController::class, 'home'])->name('home');

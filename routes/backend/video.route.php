<?php

use App\Http\Controllers\Backend\VideoController;

// Video Routes
Route::resource('videos', VideoController::class);

<?php

use App\Http\Controllers\Backend\TmdbController;

Route::post('/tmdb/fetch/', [TmdbController::class, 'fetch'])->name('tmdb.fetch');

Route::get('/movie/', [TmdbController::class, 'fetch']);

<?php

use App\Http\Controllers\LatestEntriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [LatestEntriesController::class, 'index']);

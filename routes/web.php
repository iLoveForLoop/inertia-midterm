<?php

use App\Http\Controllers\BidderController;
use App\Http\Controllers\CarController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Home/Index');
});

Route::get('/cars', [CarController::class, 'index']);
Route::get('/bidders', [BidderController::class, 'index']);
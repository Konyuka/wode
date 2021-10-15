<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LandingController;

Route::get('/', function () {
    return view('app');
});

Route::get('/', [LandingController::class, 'index'])
    ->name('landing');

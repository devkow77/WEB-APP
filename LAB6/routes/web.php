<?php

use App\Http\Controllers\TripController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/trips', [TripController::class, 'index']);
// Route::get('/trips/{id}', [TripController::class, 'show']);

Route::controller(TripController::class)->group(function(){
    Route::get('/trips', 'index');
    Route::get('/trips/{id}', 'show');
});
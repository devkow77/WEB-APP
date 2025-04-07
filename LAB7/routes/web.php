<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\TripController;
use App\Models\Trip;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(TripController::class)->group(function () {
    Route::get('/trips', 'index')->name('trips.index');
    Route::get('/trips/{id}', 'show')->name('trips.show');
});

Route::resource('countries', CountryController::class); // tworzy route CRUD automatycznie

Route::get('/trips/{id}/edit', [TripController::class, 'edit'])->name('trips.edit');
Route::put('/trips/{id}', [TripController::class, 'update', 'update'])->name('trips.update'); 


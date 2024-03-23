<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('states', StateController::class);
Route::resource('cities', CityController::class);
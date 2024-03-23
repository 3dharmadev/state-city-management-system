<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\State;


Route::get('/', function () {
    return view('welcome');
});

 

Route::get('/cities', [CityController::class, 'index'])->name('cities.index');
Route::get('/cities/create', [CityController::class, 'create'])->name('cities.create');
Route::post('/cities', [CityController::class, 'store'])->name('cities.store');
 Route::get('/cities/{city}/edit', [CityController::class, 'edit'])->name('cities.edit');
Route::put('/cities/{city}', [CityController::class, 'update'])->name('cities.update');
Route::delete('/cities/{city}', [CityController::class, 'destroy'])->name('cities.destroy');




Route::get('/states', [StateController::class, 'index'])->name('states.index');
Route::get('/states/create', [StateController::class, 'create'])->name('states.create');
Route::post('/states', [StateController::class, 'store'])->name('states.store');
 Route::get('/states/{state}/edit', [StateController::class, 'edit'])->name('states.edit');
Route::put('/states/{state}', [StateController::class, 'update'])->name('states.update');
Route::delete('/states/{state}', [StateController::class, 'destroy'])->name('states.destroy');

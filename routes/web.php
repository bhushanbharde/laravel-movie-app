<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\ActorsController;
use App\Http\Controllers\TvController;


Route::get('/', [MoviesController::class, 'index']);
Route::get('/movies/{id}', [MoviesController::class, 'show']);

Route::get('/tv', [TvController::class, 'index']);
Route::get('/tv/{id}', [TvController::class, 'show']);

Route::get('/actors', [ActorsController::class, 'index']);
Route::get('/actors/{actor}', [ActorsController::class, 'show']);

Route::get('/actors/page/{page?}', [ActorsController::class, 'index']);
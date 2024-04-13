<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\DataController;


Route::get('/', [BookController::class, 'index']);

Route::get('/clear-data', [DataController::class, 'clearData'])->name('clear-data');
Route::get('/generate-data', [DataController::class, 'generatedata'])->name('generate-data');

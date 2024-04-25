<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\MathController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class, 'index'])->name('index');
Route::get('/math', [AppController::class, 'math'])->name('math');
Route::post('/math/pros/9', [MathController::class, 'processNumber']);
Route::post('/math/pros/large', [MathController::class, 'processNumberToLarge']);

<?php

use App\Http\Controllers\DistroController;
use Illuminate\Support\Facades\Route;

Route::post('/distros/filter', [DistroController::class, 'show']);
Route::get('/distros', [DistroController::class, 'index']);
Route::put('/distros/{id}', [DistroController::class, 'update']);
Route::delete('/distros/{id}', [DistroController::class, 'destroy']);
Route::post('/distros', [DistroController::class, 'store']);

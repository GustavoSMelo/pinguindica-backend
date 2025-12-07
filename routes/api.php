<?php

use App\Http\Controllers\DistroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/distro/filter', [DistroController::class, 'show']);
Route::get('/distro', [DistroController::class, 'index']);
Route::put('/distro', [DistroController::class, 'update']);
Route::delete('/distro', [DistroController::class, 'destroy']);
Route::post('/distro', [DistroController::class, 'create']);

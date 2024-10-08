<?php

use App\Http\Controllers\dokterController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\pasienController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/dokter',[dokterController::class, 'index']);
Route::post('/dokter', [dokterController::class, 'store']);
Route::patch('/dokter/{dokter}',[dokterController::class, 'update']);
Route::delete('/dokter/{dokter}', [dokterController::class, 'destroy']);
Route::get('/obat',[ObatController::class, 'index']);
Route::post('/obat', [ObatController::class, 'store']);
Route::patch('/obat/{obat}',[ObatController::class, 'update']);
Route::delete('/obat/{obat}', [ObatController::class, 'destroy']);
Route::get('/pasien',[pasienController::class, 'index']);
Route::post('/pasien', [pasienController::class, 'store']);
Route::patch('/pasien/{pasien}',[pasienController::class, 'update']);
Route::delete('/pasien/{pasien}', [pasienController::class, 'destroy']);
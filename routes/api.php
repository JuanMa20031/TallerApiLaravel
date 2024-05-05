<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/carros', [CarroController::class, 'index']);
    Route::get('/carros/{id}', [CarroController::class, 'show']);
    Route::post('/carros', [CarroController::class, 'store']);
    Route::put('/carros/{id}', [CarroController::class, 'update']);
    Route::delete('/carros/{id}', [CarroController::class, 'destroy']);
});

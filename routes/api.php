<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DosenController;
use App\Http\Controllers\Api\MahasiswaController;

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


Route::prefix('v1')->group(function () {
    // Route untuk Dosen
    Route::get('dosens', [DosenController::class, 'index']);
    Route::get('dosens/{id}', [DosenController::class, 'show']);

    // Route untuk Mahasiswa
    Route::get('mahasiswas', [MahasiswaController::class, 'index']);
    Route::get('mahasiswas/{id}', [MahasiswaController::class, 'show']);
});

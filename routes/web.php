<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\BobotController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\MatrikController;
use App\Http\Controllers\SkalaController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Alternatif
Route::get('/alternatif', [AlternatifController::class, 'index']);
Route::get('/alternatif/create', [AlternatifController::class, 'create']);
Route::post('/alternatif/store', [AlternatifController::class, 'store']);
Route::get('/alternatif/{id}/edit', [AlternatifController::class, 'edit']);
Route::put('/alternatif/{id}', [AlternatifController::class, 'update']);
Route::get('/alternatif/{id}/delete', [AlternatifController::class, 'destroy']);

// Kriteria
Route::get('/kriteria', [KriteriaController::class, 'index']);
Route::get('/kriteria/create', [KriteriaController::class, 'create']);
Route::post('/kriteria/store', [KriteriaController::class, 'store']);
Route::get('/kriteria/{id}/edit', [KriteriaController::class, 'edit']);
Route::put('/kriteria/{id}', [KriteriaController::class, 'update']);
Route::get('/kriteria/{id}/delete', [KriteriaController::class, 'destroy']);

// Skala
Route::get('/skala', [SkalaController::class, 'index']);
Route::get('/skala/create', [SkalaController::class, 'create']);
Route::post('/skala/store', [SkalaController::class, 'store']);
Route::get('/skala/{id}/edit', [SkalaController::class, 'edit']);
Route::put('/skala/{id}', [SkalaController::class, 'update']);
Route::get('/skala/{id}/delete', [SkalaController::class, 'destroy']);

// Bobot
Route::get('/bobot', [BobotController::class, 'index']);
Route::get('/bobot/create', [BobotController::class, 'create']);
Route::post('/bobot/store', [BobotController::class, 'store']);
Route::get('/bobot/{id}/edit', [BobotController::class, 'edit']);
Route::put('/bobot/{id}', [BobotController::class, 'update']);
Route::get('/bobot/{id}/delete', [BobotController::class, 'destroy']);

// Matrik
Route::get('/matrik', [MatrikController::class, 'index']);
Route::get('/matrik/create', [MatrikController::class, 'create']);
Route::post('/matrik/store', [MatrikController::class, 'store']);
Route::get('/matrik/{id}/edit', [MatrikController::class, 'edit']);
Route::put('/matrik/{id}', [MatrikController::class, 'update']);
Route::get('/matrik/{id}/delete', [MatrikController::class, 'destroy']);


// Matrik keputusan
Route::get('/matrik-keputusan', [ViewController::class, 'keputusan']);
// Normalisasi
Route::get('/normalisasi', [ViewController::class, 'normalisasi']);

// Rangking
Route::get('/rangking', [ViewController::class, 'rangking']);
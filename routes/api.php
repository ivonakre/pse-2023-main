<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TerminiPredavanjaController;
use App\Http\Controllers\PredmetiController;
use App\Http\Controllers\UcionicaController;
use App\Http\Controllers\ProfesoriController;

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

// TerminiPredavanja
Route::post('/terminipredavanja/dodaj', [TerminiPredavanjaController::class, 'store']);
Route::post('/terminipredavanja/uredi/{id}', [TerminiPredavanjaController::class, 'edit']);
Route::get('/terminipredavanja/dohvati', [TerminiPredavanjaController::class, 'index']);
Route::get('/terminipredavanja/izbrisi/{id}', [TerminiPredavanjaController::class, 'destroy']);

// Predmeti
Route::post('/predmeti/dodaj', [PredmetiController::class, 'store']);
Route::post('/predmeti/uredi/{id}', [PredmetiController::class, 'edit']);
Route::get('/predmeti/dohvati', [PredmetiController::class, 'index']);
Route::get('/predmeti/izbrisi/{id}', [PredmetiController::class, 'destroy']);

// Ucionica
Route::post('/ucionica/dodaj', [UcionicaController::class, 'store']);
Route::post('/ucionica/uredi/{id}', [UcionicaController::class, 'edit']);
Route::get('/ucionica/dohvati', [UcionicaController::class, 'index']);
Route::get('/ucionica/izbrisi/{id}', [UcionicaController::class, 'destroy']);

// Profesori
Route::post('/profesori/dodaj', [ProfesoriController::class, 'store']);
Route::post('/profesori/uredi/{id}', [ProfesoriController::class, 'edit']);
Route::get('/profesori/dohvati', [ProfesoriController::class, 'index']);
Route::get('/profesori/izbrisi/{id}', [ProfesoriController::class, 'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
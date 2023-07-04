<?php

use Illuminate\Support\Facades\Route;
#dodano
#use App\Http\Controllers\ProfesoriController;
#use App\Http\Controllers\PredmetiController;
#use App\Http\Controllers\TerminiPredavanjaController;

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

#dodano
#Route::get('/profesori', [ProfesoriControllerController::class, 'index']);
#Route::get('/predmeti', [PredmetiController::class, 'index']);
#Route::get('/terminipredavanja', [TerminiPredavanjaController::class, 'index']);

#Route::resource('profesori', ProfesoriControllerController::class);
#Route::resource('predmeti', PredmetiController::class);
#Route::resource('terminipredavanja', TerminiPredavanjaController::class);
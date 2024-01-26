<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\VacanteController;
use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\CandidatosVacantesController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ReclutadorController;





Route::get('dashboard', [PageController::class, 'dashboard'])

->name('dashboard');
Route::get('/', [PageController::class, 'dashboard'])

->name('dashboard');

Route::resource('reclutador',ReclutadorController::class)
->middleware('auth:sanctum'); 

Route::resource('vacante',VacanteController::class)
->middleware('auth:sanctum'); 

Route::resource('candidatosvacantes', CandidatosVacantesController::class);

Route::resource('candidato',CandidatoController::class)
->middleware('auth:sanctum'); 


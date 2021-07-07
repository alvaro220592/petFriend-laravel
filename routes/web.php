<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ScheduleController;

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

Route::get("/", [ScheduleController::class, 'index']);

Route::get('/agendar', [ScheduleController::class, 'agendar']);

Route::get('/clients/cadastro',[ClientController::class, 'cadastro']);

Route::post('/clients', [ClientController::class, 'store']);

Route::get('/pets/cadastro', [PetController::class, 'cadastro']);

Route::post('/pets', [PetController::class, 'store']);

Route::post('/agendar', [ScheduleController::class, 'store']);
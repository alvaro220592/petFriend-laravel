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

Route::get("/", [ScheduleController::class, 'index'])->name('index')->middleware('auth');

Route::get('/agendar', [ScheduleController::class, 'agendar'])->name('agendarView');

Route::get('/getPets/{id}', [ScheduleController::class, 'getPets']);

Route::get('/clients/cadastro',[ClientController::class, 'cadastro'])->name('/clients/cadastro');

Route::post('/clients', [ClientController::class, 'store']);

Route::get('/clients', [ClientController::class, 'index'])->name('/clients/get');

Route::get('/pets/cadastro', [PetController::class, 'cadastro']);

Route::post('/pets', [PetController::class, 'store']);

Route::get('/pets', [PetController::class, 'index'])->name('/pets/get');

Route::post('/agendar', [ScheduleController::class, 'store']);

Route::delete('clients/{id}', [ClientController::class, 'destroy']);

Route::delete('pets/{id}', [PetController::class, 'destroy']);

// Edição Cliente
Route::get('clients/edit/{id}', [ClientController::class, 'edit']);

// Alteração Cliente
Route::put('clients/update/{id}', [ClientController::class, 'update']);

// Edição Pet
Route::get('pets/edit/{id}', [PetController::class, 'edit']);

// Alteração Pet
Route::put('pets/update/{id}', [PetController::class, 'update']);

// Finalizar agendamento (altera o status do agendamento pra 'finalizado')
Route::put("schedule/finalizar/{id}", [ScheduleController::class, 'finalizar']);

// histórico de agendamentos:
Route::get('/schedules/hist', [ScheduleController::class, 'schedulesHist']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

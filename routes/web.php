<?php

use App\Http\Controllers\LogicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LogicController::class, 'view'])->name('index');
Route::get('new-reservation', [LogicController::class, 'newreservation'])->name('reservation.form');
Route::post('form-reserve', [LogicController::class, 'reserve'])->name('form-reserve');

Route::get('all-reservations', [LogicController::class, "allreservations"])->name('reservations.all');


<?php

use App\Http\Controllers\GearsOfWarController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\JuegoController;
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

Route::get('/', InicioController::class);
Route::get('/gearsOfWar',[GearsOfWarController::class, 'GearsOfWar'] );
Route::get('/juego/uno', [JuegoController::class, 'juego1']);
Route::get('/juego/dos',  [JuegoController::class, 'juego2']);
Route::get('/juego/tres',  [JuegoController::class, 'juego3']);
Route::get('/juego/cuatro',  [JuegoController::class, 'juego4']);
Route::get('/juego/cinco', [JuegoController::class, 'juego5']);

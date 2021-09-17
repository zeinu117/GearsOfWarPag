<?php

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
    $vistas = view('welcome');
    return $vistas;
});
Route::get('/gearsOfWar', function () {
    $vistas = view('layout/header').
                view('layout/menu').
                view('gearsOfWar').
                view('layout/footer');
    return $vistas;
});
Route::get('/juego/uno', function () {
    $vistas = view('layout/header').
                view('layout/menu').
                view('juego/uno').
                view('layout/footer');
    return $vistas;
});
Route::get('/juego/dos', function () {
    $vistas = view('layout/header').
                view('layout/menu').
                view('juego/dos').
                view('layout/footer');
    return $vistas;
});
Route::get('/juego/tres', function () {
    $vistas = view('layout/header').
                view('layout/menu').
                view('juego/tres').
                view('layout/footer');
    return $vistas;
});
Route::get('/juego/cuatro', function () {
    $vistas = view('layout/header').
                view('layout/menu').
                view('juego/cuatro').
                view('layout/footer');
    return $vistas;
});
Route::get('/juego/cinco', function () {
    $vistas = view('layout/header').
                view('layout/menu').
                view('juego/cinco').
                view('layout/footer');
    return $vistas;
});

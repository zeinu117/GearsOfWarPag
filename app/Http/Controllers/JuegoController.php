<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuegoController extends Controller
{
    public function juego1(){
        $vistas = view('juego/uno');
    return $vistas;
    }

    public function juego2(){
        $vistas =
                view('juego/dos');
    return $vistas;
    }
    public function juego3(){
        $vistas =
                view('juego/tres');
    return $vistas;
    }
    public function juego4(){
        $vistas =
                view('juego/cuatro');
    return $vistas;
    }
    public function juego5(){
        $vistas =
                view('juego/cinco');
    return $vistas;
    }
}

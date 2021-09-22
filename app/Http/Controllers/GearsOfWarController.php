<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GearsOfWarController extends Controller
{
    public function GearsOfWar(){
        $vistas =view('gearsOfWar');
    return $vistas;
    }
}

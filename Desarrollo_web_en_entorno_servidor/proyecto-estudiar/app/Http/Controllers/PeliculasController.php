<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    public function mostrar()
    {
        $datos = "Manu";
        $clase="2 DAW";
        return view('pagina', ['datos'=>$datos,'clase'=>$clase]);
        return view('pagina', compact('datos'));
    }
}

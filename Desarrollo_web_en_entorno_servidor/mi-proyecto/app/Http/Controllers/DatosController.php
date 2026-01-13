<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dato;

class DatosController extends Controller
{
     public function index(){

     $datos=Dato::all();

      return view('index',['datos'=>$datos]);  //view('index',compact('datos');
   }



}

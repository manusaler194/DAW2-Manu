<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PeliculasController;
use App\Http\Controllers\DatosController;

Route::get('pelis', [PeliculasController::class, 'mostrar']);


//Route::get('')


/*Route::get('/', function () {
    return view('welcome');
});*/
Route::delete('/borrar/{id}', [DatosController::class,'borrar'])->name('borrar');

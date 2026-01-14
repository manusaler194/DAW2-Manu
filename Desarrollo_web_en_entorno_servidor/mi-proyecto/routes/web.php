<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PeliculasController;
use App\Http\Controllers\DatosController;
use App\Http\Controllers\PruebasController;
Route::get('pelis', [PeliculasController::class, 'mostrar']);
Route::get('/pruebas', [PruebasController::class, 'relacionUnoAMuchos'])->name('relacion');
Route::get('/ejercicio', [PruebasController::class, 'ejercicio'])->name('ejercicio');
Route::post('/almacenar', [PruebasController::class, 'almacenar'])->name('almacenar');
//Route::get('')


/*Route::get('/', function () {
    return view('welcome');
});*/
Route::delete('/borrar/{id}', [DatosController::class,'borrar'])->name('borrar');

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareasController;
use App\Http\Controllers\API\UserController;



Route::post('login', [UserController::class,'login']);
Route::post('register', [UserController::class,'register']);
Route::group(['middleware' => 'auth:api'], function () {
        Route::get('details', [UserController::class,'details']);
        Route::get('logout', [UserController::class,'logout']);
});


Route::get('/tareas', [TareasController::class, 'index']);

Route::put('/tareas/actualizar/{id}', [TareasController::class, 'update']);

Route::post('/tareas/guardar', [TareasController::class, 'store']);

Route::delete('/tareas/borrar/{id}', [TareasController::class, 'destroy']);

Route::get('/tareas/buscar/{id}', [TareasController::class, 'show']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

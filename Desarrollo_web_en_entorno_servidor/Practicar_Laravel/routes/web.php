<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudiantesController;  //añadimos el controlador


Route::view('/login', 'login')->name('logininicio');
Route::post('/login-usuario', [EstudiantesController::class, 'login'])->name('login');

Route::view('/registrar', 'registrar')->name('registrarinicio');
Route::post('/registrar-usuario', [EstudiantesController::class, 'registro'])->name('registrar');
Route::view('/estudiante','estudiante')->name('estudiante');
Route::get('/logout', [EstudiantesController::class, 'logout'])->name('logout');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

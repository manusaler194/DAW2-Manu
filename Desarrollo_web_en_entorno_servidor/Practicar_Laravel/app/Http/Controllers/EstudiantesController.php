<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Validator;

class EstudiantesController extends Controller
{
    public function login(Request $request)
     {
         $request->validate([
            'name' => ['required', 'string'],
            'password' => ['required'],
        ]);

        $credentials = $request->only('name', 'password');

// aquí se autentifica con los estudiantes.
        if (Auth::guard('estudiantes')->attempt($credentials)) {

            dump(Auth::user());
            $request->session()->regenerate();
            return redirect()->route('estudiante');   //redirije donde le digas
        }

        return back()->withErrors([
            'name' => 'Credenciales incorrectas',
            'password' => 'Contra incorrecta',
        ]);
     }



     public function registro(Request $request)
     {
         $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:estudiantes'],
            'password' => ['required'],
        ]);


        Estudiante::create([
            'name' => trim($request->input('name')),
            'email' => strtolower($request->input('email')),
            'password' => Hash::make($request->input('password')),
        ]);

       Auth::attempt($request->only('email', 'password'));

        return redirect()->route('estudiante');   //redirije donde le digas
     }

     public function logout(Request $request)
     {
         Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('logininicio');
     }
}

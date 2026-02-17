<?php

namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;



class UserController extends Controller
{

    public $successStatus = 200;
    /**
     * login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')->accessToken;
            return response()->json(['success' => $success], $this->successStatus);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }
     public function register(Request $request)
    {
    // Validar los datos recibidos
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required', // Usamos confirmed para comparar con password_confirmation
    ]);

    try {
        // Crear el usuario con la contraseña cifrada
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Generar un token de acceso
        $token = $user->createToken('MyApp')->accessToken;

        // Preparar la respuesta de éxito
        return response()->json([
            'success' => [
                'token' => $token,
                'name' => $user->name,
            ]
        ], 201); // Código HTTP 201: Creado
    } catch (\Exception $e) {
        // Manejar errores inesperados
        return response()->json([
            'error' => 'No se pudo registrar el usuario.',
            'details' => $e->getMessage(),
        ], 500); // Código HTTP 500: Error interno del servidor
    }
   }
    public function details()
    {
        $user = Auth::user();
        return response()->json(['success' => $user], $this->successStatus);
    }
    public function logout(Request $request)
    {

        $isUser = $request->user()->token()->revoke();
        if($isUser){
            $success['message'] = "Successfully logged out.";
            return response()->json(['success' => $isUser], $this->successStatus);
        }
        else{
            return response()->json(['error' => 'Unauthorised'], 401);
        }


    }

}

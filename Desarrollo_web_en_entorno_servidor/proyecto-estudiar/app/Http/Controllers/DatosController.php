<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dato;

class DatosController extends Controller
{
     public function index(){

     $datos=Dato::all();

      return view('mostrardato',['datos'=>$datos]);  //view('index',compact('datos');
   }
   public function editar($id){

    $dato = Dato::findOrFail($id);  //como no está el dato si nos equivocamos de id nos muestra la página de error 404, podemos crear uno personalizado en la view->errors->404.blade.php , creamos carpeta "errors"
    return view('editardato', compact('dato'));
   }
   public function actualizar(Request $request)
    {
        $validacion = $request->validate([
            'nombre' => 'required|min:1|max:10',
            'descripcion' => 'required',
        ]);

        Dato::findOrFail($request->id)->update($validacion);

        /*  //otra forma de almacenar
         $datos = Dato::find($id);   //podremos utilizar findOrFail($id) para que en caso de no encontrar no falle
         $datos->nombre = $validacion['nombre'];
         $datos->descripcion = $validacion['descripcion'];
         $datos->update();*/

        return redirect()->route('index');
}

// formar de recuperar datos de un formulario NO recomendable.
 public function borrar($id){

        $dato = Dato::findOrFail($id);
        $dato->delete();
        return redirect()->route('index');
       }


}

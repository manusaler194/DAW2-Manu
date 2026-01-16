<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Articulo;
class PruebasController extends Controller
{
     public function almacenar(Request $request){

       // dump($request);

// //LA MEJOR FORMA DE INSERTAR DATOS ya que se hace la comprobación de los campos obligatorios para que no hagan inyeccion y luego inserta.
     $datos=$request->validate([
        'cat'=>'required|max:25',
        ]
    );

   // dd($datos);
     $categoria=Categoria::find($datos["cat"]);
     $articulos = $categoria->articulos;
    // dump($articulos->toArray());



    return view ('mostrardato', compact('categoria','articulos'));
//     //return back();     //te redirecciona a la misma página
   }
    public function ejercicio() {

        $categorias =Categoria::all();

     //   dump($categorias->toArray());

        return view ('ejercicio', compact('categorias'));
    }



    public function relacionUnoAMuchos() {
        //$categorias=Categoria::with('articulos')->where('nombre', 'futbol')->get();
       /* $categorias=Categoria::find(1);
        $articulos = $categorias->articulos;
        echo $categorias;
        dump($categorias->toArray());*/
        /*$articulo =Articulo::find(7);
        dump($articulo->toArray());
        $categoria = $articulo->categoria;
        dump($categoria->toArray());
        $Categoria = Categoria::find(9);
        $Categoria->delete();*/
?>






<?php
                /*$categoria = Categoria::find(3);   //buscamos que ya tenemos almacenada o la creamos.

                $articulo = new Articulo(['titulo' => 'Pedazo Artículo', 'descripcion' => 'toda la descripción']);  //creamos artículo.
                $categoria->articulos()->save($articulo);  //guardamos dentro de categoria un artículo.*/

               //en caso que tengamos varios artículos
               /* $categoria->articulos()->saveMany([
                    new Articulo(['titulo' => 'A new comment.', 'descripcion' => 'hola']),
                    new Articulo(['titulo' => 'Another comment.',  'descripcion' => 'hola']),
                ]);*/

    }



}
?>

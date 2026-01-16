<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

    //protected $primaryKey = 'categoria_id';
    //Por defecto id es la clave primaria, podemos definir un campo diferente con la propiedad primaryKey

    //public $timestamps = true;   //especificamos si queremos crear created_at y updated_at en la base de datos
    protected $fillable = ['nombre', 'masInfo'];

    public function articulos()
    {
        return $this->hasMany(Articulo::class);
    }
}

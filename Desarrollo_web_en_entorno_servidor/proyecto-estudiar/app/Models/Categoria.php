<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

    protected $fillable = ['nombre', 'masInfo'];

    public function articulos()
    {
        return $this->hasMany(Articulo::class);
    }
}

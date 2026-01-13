<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulos';
    protected $fillable = ['titulo', 'descripcion'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}

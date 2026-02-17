<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $fillable = ['name', 'description', 'content'];
    public $timestamps = false;  //indicamos que no queremos usar update_at y create_at en la base de datos.
}

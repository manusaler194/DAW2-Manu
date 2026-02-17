<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dato extends Model
{
    protected $table= 'datos';
    protected $fillable = ['nombre', 'descripcion'];


}

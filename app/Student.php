<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
    	'nombre',
    	'apellido',
    	'telefono',
    	'descripcion',
    ];
}

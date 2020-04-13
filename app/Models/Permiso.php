<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    //Creamos un metodo protected para decirle a Laravel que utilizamos el nombre de las tablas en singular
    protected $table = "permiso";
}

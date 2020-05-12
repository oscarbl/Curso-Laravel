<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    //Creamos un metodo protected para decirle a Laravel que utilizamos el nombre de las tablas en singular
    protected $table = "permiso";
    protected $fillable = ['nombre', 'slug'];

    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'permiso_rol', 'permiso_id', 'rol_id');
    }
}

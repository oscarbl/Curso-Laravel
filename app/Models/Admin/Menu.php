<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    // Son los campos a crear de forma masiva a traves de post, mediante Eloquent
    protected $table = 'menu';
    protected $fillable = ['nombre', 'url', 'icono']; //Esto ayuda con la seguridad del proyecto
    protected $guarded = 'id'; // No permite utilizar el id en caso de ataque
}

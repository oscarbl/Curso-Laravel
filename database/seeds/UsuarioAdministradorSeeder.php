<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioAdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('usuario')->insert([
            'usuario' => 'biblioteca_admin',
            'nombre' => 'Administrador',
            'password' => bcrypt('pass123')
        ]);
    }
}

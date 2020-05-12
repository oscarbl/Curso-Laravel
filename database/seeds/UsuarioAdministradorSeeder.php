<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioAdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert([
            'usuario' => 'admin',
            'nombre' => 'Administrador',
            'password' => Hash::make('pass123')
        ]);

        DB::table('usuario')->insert([
            'usuario' => 'rat',
            'nombre' => 'Roosvelt',
            'password' => bcrypt('pass123')
        ]);

        DB::table('usuario_rol')->insert([
            'rol_id' => 1,
            'usuario_id' => 1,
            'estado' => 1
        ]);
    }
}

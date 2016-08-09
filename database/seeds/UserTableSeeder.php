<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(Infraestructura\User::class)->create([
            'nombres' => 'Jorge',
            'apellidos' => 'Peralta',
            'cedula' => '12345678',
            'celular' => '98745632',
            'facultad' => 'null',
            'carrera' => 'null',
            'materia' => 'null',
            'sigla' => 'null',
            'email'=> 'jorge@gmail.com',
            'tipo' => 'administrador',
            'password'=> 'admin1',
            'active'=> true

            ]);
        factory(Infraestructura\User::class, 49)->create();
    }
}

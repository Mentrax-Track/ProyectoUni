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
            'nombres'   => 'Jorge',
            'apellidos' => 'Peralta',
            'cedula'    => '12345678',
            'celular'   => '98745632',
            'facultad'  => 'null',
            'carrera'   => 'null',
            'materia'   => 'null',
            'sigla'     => 'null',
            'email'     => 'peralta.jorge.uatf@gmail.com',
            'tipo'      => 'administrador',
            'password'  => 'admin1',
            'active'    => true

            ]);
        factory(Infraestructura\User::class)->create([
            'nombres'   => 'Denys',
            'apellidos' => 'Peralta',
            'cedula'    => '87654321',
            'celular'   => '98745642',
            'facultad'  => 'null',
            'carrera'   => 'null',
            'materia'   => 'null',
            'sigla'     => 'null',
            'email'         => 'jorge@gmail.com',
            'tipo'          => 'supervisor',
            'password'  => 'admin1',
            'active'    => true

            ]);
        factory(Infraestructura\User::class)->create([
            'nombres'   => 'Valerio',
            'apellidos' => 'Condori',
            'cedula'    => '12345679',
            'celular'   => '98745632',
            'facultad'  => 'null',
            'carrera'   => 'null',
            'materia'   => 'null',
            'sigla'     => 'null',
            'email'     => 'valerio@gmail.com',
            'tipo'      => 'chofer',
            'password'  => 'admin1',
            'active'    => true

            ]);
        factory(Infraestructura\User::class)->create([
            'nombres'   => 'Diego',
            'apellidos' => 'Mamani',
            'cedula'    => '12345689',
            'celular'   => '98745632',
            'facultad'  => 'null',
            'carrera'   => 'null',
            'materia'   => 'null',
            'sigla'     => 'null',
            'email'         => 'diego@gmail.com',
            'tipo'          => 'mecánico',
            'password'  => 'admin1',
            'active'    => true

            ]);
        factory(Infraestructura\User::class)->create([
            'nombres'   => 'Docente',
            'apellidos' => 'Burton',
            'cedula'    => '12345789',
            'celular'   => '98745632',
            'facultad'  => 'Ingeniería',
            'carrera'   => 'Sistemas',
            'materia'   => 'Proyectos',
            'sigla'     => 'SIS - 150',
            'email'     => 'docente@gmail.com',
            'tipo'      => 'encargado',
            'password'  => 'admin1',
            'active'    => true

            ]);
        factory(Infraestructura\User::class, 50)->create();
    }
}

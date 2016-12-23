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
            'celular'   => '98653214',
            'email'     => 'peralta.jorge.uatf@gmail.com',
            'tipo'      => 'administrador',
            'password'  => 'admin1',
            'active'    => true

            ]);
        factory(Infraestructura\User::class)->create([
            'nombres'   => 'Denys',
            'apellidos' => 'Peralta',
            'cedula'    => '87654321',
            'celular'   => '12585678',
            'email'     => 'peralta.rfrratf@gmail.com',
            'tipo'      => 'supervisor',
            'password'  => 'admin1',
            'active'    => true

            ]);
        factory(Infraestructura\User::class)->create([
            'nombres'   => 'Valerio',
            'apellidos' => 'Condori',
            'cedula'    => '12345679',
            'celular'   => '12345112',
            'email'     => 'peralta.jorge@gmail.com',
            'tipo'      => 'chofer',
            'password'  => 'admin1',
            'active'    => true

            ]);
        factory(Infraestructura\User::class)->create([
            'nombres'   => 'Diego',
            'apellidos' => 'Mamani',
            'cedula'    => '12345689',
            'celular'   => '11589678',
            'email'     => 'peraltalorge.uatf@gmail.com',
            'tipo'          => 'mecanico',
            'password'  => 'admin1',
            'active'    => true

            ]);
        factory(Infraestructura\User::class)->create([
            'nombres'   => 'Docente',
            'apellidos' => 'Burton',
            'cedula'    => '12345789',
            'celular'   => '12345145',
            'email'     => 'rge.uatf@gmail.com',
            'tipo'      => 'encargado',
            'password'  => 'admin1',
            'active'    => true

            ]);
        //factory(Infraestructura\User::class, 50)->create();
    }
}

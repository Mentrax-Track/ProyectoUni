<?php

use Illuminate\Database\Seeder;

class EntidadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Infraestructura\Entidad::class)->create([
            'facultad'  => 'Ingenieria',
            'carrera'   => 'Ingenieria de Sistemas',
            'materia'   => 'Proyectos',
            'sigla'     => 'SIS - 735',
            'user_id'  => '1',
        ]);
        factory(Infraestructura\Entidad::class, 50)->create();
    }
}

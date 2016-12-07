<?php

use Illuminate\Database\Seeder;

class VehiculoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(Infraestructura\Vehiculo::class)->create([
            'codigo'     => 'C-123',
            'placa'      => '153-AVG',
            'color'      => 'rojo',
            'pasajeros'  => '10',
            'tipog'      => 'Vagoneta',
            'estado'     => 'optimo',

            ]);
        factory(Infraestructura\Vehiculo::class, 39)->create();
    }
}

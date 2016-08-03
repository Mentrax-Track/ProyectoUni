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
        DB::table('vehiculos')->truncate();

        factory(Infraestructura\Vehiculo::class)->create([
            'codigo'     => 'C-123',
            'tipo'       => 'Camioneta',
            'placa'      => '153-AVG',
            'color'      => 'rojo',
            'kilometraje'=> '1200',
            'pasageros'  => '10',
            'path'       => 'eigrp.jpg',
            'estado'     => 'Optimo',

            ]);
        factory(Infraestructura\Vehiculo::class, 40)->create();
    }
}

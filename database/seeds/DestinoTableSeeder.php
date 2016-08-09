<?php

use Illuminate\Database\Seeder;

class DestinoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Infraestructura\Destino::class, 40)->create();
    }
}

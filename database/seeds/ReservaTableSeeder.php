<?php

use Illuminate\Database\Seeder;

class ReservaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(Infraestructura\Reserva::class, 100)->create();
    }
}

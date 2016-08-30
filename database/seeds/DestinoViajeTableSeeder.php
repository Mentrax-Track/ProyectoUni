<?php

use Illuminate\Database\Seeder;
use Infraestructura\Viaje;

class DestinoViajeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Infraestructura\Destino::class, 100)->create();

        for($i=1 ; $i<=100; $i++)
        {
            $user = Viaje::find($i);
            for($j=1 ; $j<=5 ; $j++)
            {
                $user->destinos()->attach(rand(1,100));
            }        
        }
    }
}

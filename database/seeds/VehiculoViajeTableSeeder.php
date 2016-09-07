<?php

use Illuminate\Database\Seeder;
use Infraestructura\Vehiculo;

class VehiculoViajeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*for($i=1 ; $i<=40; $i++)
        {
            $user = Vehiculo::find($i);
            for($j=1 ; $j<=5 ; $j++)
            {
                $user->viajes()->attach(rand(1,100));
            }        
        }*/
    }
}

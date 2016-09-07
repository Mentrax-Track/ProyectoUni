<?php

use Illuminate\Database\Seeder;
use Infraestructura\User;

class VehiculoUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       /* for($i=1 ; $i<=49; $i++)
        {
            $user = User::find($i);
            for($j=1 ; $j<=5 ; $j++)
            {
                $user->vehiculos()->attach(rand(1,39));
            }        

        }*/
    }
}

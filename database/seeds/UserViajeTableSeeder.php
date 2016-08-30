<?php

use Illuminate\Database\Seeder;
use Infraestructura\User;

class UserViajeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Infraestructura\Viaje::class, 100)->create();

        for($i=1 ; $i<=49; $i++)
        {
            $user = User::find($i);
            for($j=1 ; $j<=5 ; $j++)
            {
                $user->viajes()->attach(rand(1,100));
            }        
        }
        factory(Infraestructura\Ruta::class, 80)->create();
    }
}

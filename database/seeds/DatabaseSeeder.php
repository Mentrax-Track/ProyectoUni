<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        //DB::statement('SET FOREIGN_KEY_CHECKS = 0'); //mysql

        $this->call(UserTableSeeder::class);

        $this->call(VehiculoTableSeeder::class);
       
        $this->call(VehiculoUserTableSeeder::class);

        $this->call(UserViajeTableSeeder::class);
 
        $this->call(VehiculoViajeTableSeeder::class);
 
        $this->call(DestinoViajeTableSeeder::class);
 
        $this->call(ReservaTableSeeder::class);

        $this->call(EntidadTableSeeder::class);

        /*$this->call(CelularTableSeeder::class);

        $this->call(EmailTableSeeder::class);*/

        Model::reguard();
        
    }
}
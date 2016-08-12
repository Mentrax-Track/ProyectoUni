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
        $this->call(UserVehiTableSeeder::class);

        $this->call(DestinoTableSeeder::class);
        $this->call(ReservasTableSeeder::class);

        $this->call(ViajeTableSeeder::class);
        
        Model::reguard();
    }
}
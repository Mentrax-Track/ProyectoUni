<?php

use Illuminate\Database\Seeder;

class CelularTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Infraestructura\Celular::class)->create([
            'celular'  => '12345678',
            'user_id'  => '1',
        ]);
    }
}

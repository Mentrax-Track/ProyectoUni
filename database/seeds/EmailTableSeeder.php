<?php

use Illuminate\Database\Seeder;

class EmailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Infraestructura\Email::class)->create([
            'email'  => 'peralta.jorge.uatf@gmail.com',
            'user_id'  => '1',
        ]);
    }
}

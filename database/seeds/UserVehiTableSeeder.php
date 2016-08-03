<?php

use Illuminate\Database\Seeder;

class UserVehiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('uservehis')->truncate();

        factory(Infraestructura\UserVehi::class)->create([
            'user_id'     => '1',
            'vehi_id'     => '1',
            ]);
        factory(Infraestructura\UserVehi::class, 40)->create();
    }
}

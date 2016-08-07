<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(Infraestructura\User::class, function (Faker\Generator $faker) {
    return [
        'nombres' => $faker->name,
        'apellidos'=> $faker->lastName,
        'cedula'   => $faker->randomNumber($nbDigits = 8),
        'celular'  => $faker->randomNumber($nbDigits = 8),
        'facultad' => $faker->state,
        'carrera'  => $faker->city,
        'materia'  => $faker->jobTitle,
        'sigla'    => $faker->secondaryAddress,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
        'tipo' => $faker->randomElement(['administrador','supervisor','chofer','mecánico','encargado']),
        'active'=> $faker->boolean
    ];
});


$factory->define(Infraestructura\Vehiculo::class, function (Faker\Generator $faker) {
    return [
        'codigo'     => $faker->secondaryAddress,
        'tipo'       => $faker->randomElement(['Camión','Camioneta','Civilian','Jeep','Omnibus','Taxi','Vagoneta']),
        'placa'      => $faker->userName,
        'color'      => $faker->colorName,
        'kilometraje'=> $faker->numberBetween($min = 100, $max = 10000),
        'pasageros'  => $faker->numberBetween($min = 5, $max = 36),
        'path'       => $faker->bothify('Hello ##??') ,
        'estado'     => $faker->randomElement(['Optimo','Mantenimiento','Desuso']),
        
    ];
});

$factory->define(Infraestructura\UserVehi::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->randomDigitNotNull(\DB::table('users')->min('id'), \DB::table('users')->max('id')),
        'vehi_id' => $faker->randomDigitNotNull(\DB::table('vehiculos')->min('id'), \DB::table('vehiculos')->max('id')),       
    ];
});

$factory->define(Infraestructura\Destino::class, function (Faker\Generator $faker) {
    return [
        'dep_inicio' => $faker->randomElement(['Potosí','Oruro','La_paz','Pando','Cochabamba','Sucre','Tarija','Santa_cruz','Beni']),
        'origen'     => $faker->state, 
        'dep_final'  => $faker->randomElement(['Potosí','Oruro','La_paz','Pando','Cochabamba','Sucre','Tarija','Santa_cruz','Beni']),
        'destino'    => $faker->state,
        'ruta'       => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'kilometraje'=> $faker->randomFloat($nbMaxDecimals = NULL, $min = 10, $max = 1000),
        'tiempo'     => $faker->time($format = 'H:i:s', $max = 'now')
    ];
});
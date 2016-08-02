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

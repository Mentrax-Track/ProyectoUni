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
        'nombres'  => $faker->name,
        'apellidos'=> $faker->lastName,
        'cedula'   => $faker->randomNumber($nbDigits = 8),
        'celular'  => $faker->randomNumber($nbDigits = 8),
        'email'  => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
        'tipo' => $faker->randomElement(['mensajero','administrador','supervisor','chofer','mecanico','encargado']),
        'active'=> $faker->boolean,
        'insertador'=> $faker->name
    ];
});

$factory->define(Infraestructura\Entidad::class, function (Faker\Generator $faker) {
    return [
        'facultad' => $faker->state,
        'carrera'  => $faker->city,
        'materia'  => $faker->jobTitle,
        'sigla'    => $faker->secondaryAddress,
        'user_id'  => $faker->numberBetween($min = 1, $max = 50),
    ];
});
/*$factory->define(Infraestructura\Celular::class, function (Faker\Generator $faker) {
    return [
        'celular'  => $faker->randomNumber($nbDigits = 8),
        'user_id'  => $faker->numberBetween($min = 1, $max = 50),
    ];
});
$factory->define(Infraestructura\Email::class, function (Faker\Generator $faker) {
    return [
        'email'  => $faker->email,
        'user_id'=> $faker->numberBetween($min = 1, $max = 50),
    ];
});*/

$factory->define(Infraestructura\Vehiculo::class, function (Faker\Generator $faker) {
    return [
        'codigo'     => $faker->secondaryAddress,
        'placa'      => $faker->userName,
        'color'      => $faker->colorName,
        'pasajeros'  => $faker->numberBetween($min = 5, $max = 36),
        'tipog'       => $faker->randomElement(['Camión','Camioneta','Civilian','Jeep','Omnibus','Taxi','Vagoneta']),
        'estado'     => $faker->randomElement(['optimo','mantenimiento','desuso']),
        
    ];
});


$factory->define(Infraestructura\Viaje::class, function (Faker\Generator $faker) {
    return [


        'entidad'       => $faker->randomElement(['Ingeniería de Sistemas','Ingenieria del Medio Ambiente','Ingeniería Geológica'
                            ,'Ing de Procesos de Mat Primas Min','Ingeniería Minera','Ingeniería Electrica'
                            ,'Ingeniería Electrónica','Ingeniería Mecánica','Ingeniería Mecatrónica','Ingeniería Automotriz'
                            ,'Federación Universitaria Local']),
        'tipo'          => $faker->randomElement(['Viaje de Práctica','Viaje de Inspección',
                            'Viaje Académico','Viaje de Cultura']),
        'objetivo'      => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'dias'          => $faker->numberBetween($min = 1, $max = 10), 
        'pasajeros'     => $faker->numberBetween($min = 5, $max = 50),
        'fecha_inicial' => $faker->dateTimeThisYear($max = 'now'),
        'fecha_final'   => $faker->dateTimeThisYear($max = 'now')
    ];
});

$factory->define(Infraestructura\Ruta::class, function (Faker\Generator $faker) {
    return [

        'destino_id' => $faker->numberBetween($min = 1, $max = 100), 
        'kilome'     => $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 1000),
        'dest1'      => $faker->numberBetween($min = 1, $max = 100), 
        'k1'         => $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 1000),
        'dest2'      => $faker->numberBetween($min = 1, $max = 100), 
        'k2'         => $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 1000),
        'dest3'      => $faker->numberBetween($min = 1, $max = 100), 
        'k3'         => $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 1000),
        'dest4'      => $faker->numberBetween($min = 1, $max = 100), 
        'k4'         => $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 1000),
        'dest5'      => $faker->numberBetween($min = 1, $max = 100), 
        'k5'         => $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 1000),
        'adicional'  => $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 1000),
        'total'      => $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 1000),
        'viaje_id'   => $faker->numberBetween($min = 1, $max = 80),

    ];
});



$factory->define(Infraestructura\Destino::class, function (Faker\Generator $faker) {
    return [
        'dep_inicio' => $faker->randomElement(['Potosí','Oruro','La_paz','Pando','Cochabamba','Sucre','Tarija','Santa_cruz','Beni']),
        'origen'     => $faker->state, 
        'dep_final'  => $faker->randomElement(['Potosí','Oruro','La_paz','Pando','Cochabamba','Sucre','Tarija','Santa_cruz','Beni']),
        'destino'    => $faker->state,
        'ruta'       => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'kilometraje'=> $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 1000),
        'tiempo'     => $faker->time($format = 'H:i:s', $max = 'now')
    ];
});

$factory->define(Infraestructura\Reserva::class, function (Faker\Generator $faker) {
    return [
        'entidad'       => $faker->randomElement(['Ingeniería de Sistemas','Ingenieria del Medio Ambiente','Ingeniería Geológica'
                            ,'Ing de Procesos de Mat Primas Min','Ingeniería Minera','Ingeniería Electrica'
                            ,'Ingeniería Electrónica','Ingeniería Mecánica','Ingeniería Mecatrónica','Ingeniería Automotriz'
                            ,'Federación Universitaria Local']),
        'objetivo'      => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'pasajeros'        => $faker->numberBetween($min = 5, $max = 50),
        'fecha_inicial' => $faker->dateTimeThisYear($max = 'now'),
        'fecha_final'   => $faker->dateTimeThisYear($max = 'now'),
        'dias'          => $faker->numberBetween($min = 2, $max = 10),
        'user_id'       => $faker->numberBetween($min = 1, $max = 50),
    ];
});



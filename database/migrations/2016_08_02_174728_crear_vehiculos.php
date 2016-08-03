<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearVehiculos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->string('tipo');
            $table->string('placa');
            $table->string('color');
            $table->float('kilometraje');
            $table->string('pasageros');
            $table->string('path');
            $table->enum('estado',['Optimo','Mantenimiento','Desuso']);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vehiculos');
    }
}

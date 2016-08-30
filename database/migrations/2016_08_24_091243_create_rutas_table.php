<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('destino_id');
            $table->string('kilome');
            $table->string('dest1');
            $table->string('k1');
            $table->string('dest2');
            $table->string('k2');
            $table->string('dest3');
            $table->string('k3');
            $table->string('dest4');
            $table->string('k4');
            $table->string('dest5');
            $table->string('k5');
            $table->string('adicional');
            $table->string('total');
            $table->integer('viaje_id')->unsigned();

            $table->foreign('viaje_id')
                ->references('id')->on('viajes')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
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
        Schema::drop('rutas');
    }
}

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
            $table->integer('destino_id');
            $table->string('kilome');
            $table->integer('dest1');
            $table->string('k1');
            $table->integer('dest2');
            $table->string('k2');
            $table->integer('dest3');
            $table->string('k3');
            $table->integer('dest4');
            $table->string('k4');
            $table->integer('dest5');
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

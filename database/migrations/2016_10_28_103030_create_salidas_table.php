<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salidas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vehiculo')->unsigned();
            $table->integer('chofer')->unsigned();
            $table->string('lugar');
            $table->string('motivo');
            $table->string('responsable');
            $table->time('hsalida');
            $table->time('hllegada');
            
            $table->foreign('vehiculo')
                ->references('id')->on('vehiculos')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('chofer')
                ->references('id')->on('users')
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
        Schema::drop('salidas');
    }
}

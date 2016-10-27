<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresupuestoDiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presudias', function (Blueprint $table) {
            $table->increments('id');
            //Datos del usuario
            $table->integer('vehiculo');
            $table->integer('chofer');
            $table->integer('encargado');
            $table->string('entidad');
            
            //Divicion del kilometraje
            $table->string('combustible');
            $table->string('litros');
            
            $table->string('numero');
            //Vuelta
            $table->integer('vuelta');
            $table->date('fechavu');
            //Registro del viaje
            $table->string('motivo');
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
        Schema::drop('presudias');
    }
}

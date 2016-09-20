<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresupuestoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presupuestos', function (Blueprint $table) {
            $table->increments('id');
            //Datos del usuario
            $table->integer('vehiculo_id');
            $table->integer('chofer_id');
            $table->integer('encargado_id');
            $table->date('fecha_inicial');
            $table->date('fecha_final');
            $table->integer('dias');
            $table->date('fecha_sa');
            // Viaje y Rutas
            $table->integer('viaje_id')->unsigned();
            $table->integer('ruta_id')->unsigned();
            //division
            $table->string('division');

            $table->foreign('viaje_id')
                ->references('id')->on('viajes')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('ruta_id')
                ->references('id')->on('rutas')
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
        Schema::drop('presupuestos');
    }
}

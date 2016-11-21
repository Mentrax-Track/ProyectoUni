<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformeviajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informesviajes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vehiculo');
            $table->string('chofer');
            $table->string('encargado');
            $table->string('entidad');
            $table->date('fechapartida');
            $table->integer('kilopartida');
            $table->time('tiempopartida');
            $table->date('fechallegada');
            $table->integer('kilollegada');
            $table->time('tiempollegada');
            $table->string('viaticoa');
            $table->string('viaticob');
            $table->string('viaticoc');
            $table->string('pasajeros');
            $table->string('kmtotal');
            $table->string('dias');
            
            $table->string('recargue1');
            $table->string('compra1');
            $table->string('recargue2');
            $table->string('compra2');
            $table->string('recargue3');
            $table->string('compra3');
            $table->string('combustotalu');
            $table->string('combustotalco');

            $table->string('descripe');
            $table->string('montope');
            $table->string('montoim');
            $table->string('totalpeim');
            $table->string('delegacion');  
            
            $table->string('descripmante');
            $table->string('recomendacion');
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
        Schema::drop('informesviajes');
    }
}

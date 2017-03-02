<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHidrocarburosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hidrocarburos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('npedido');
            $table->string('fecha');
            $table->string('factura');
            $table->string('vehiculo');
            $table->string('combustible');
            $table->string('gasolina');
            $table->string('diesel');
            $table->string('gnv');
            $table->string('litros');
            $table->string('precio');
            $table->string('total');
            $table->string('fecha_recargue');
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
        Schema::drop('hidrocarburos');
    }
}

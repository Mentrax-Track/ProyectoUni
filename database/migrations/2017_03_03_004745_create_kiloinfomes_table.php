<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKiloinfomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kilomeinformes', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('hay');
            $table->string('aumento');
            $table->string('total');

            $table->integer('vehiculo_id')->unsigned();
            $table->foreign('vehiculo_id')
                ->references('id')->on('vehiculos');

            $table->integer('informe_id')->unsigned();
            $table->foreign('informe_id')
                ->references('id')->on('informesviajes');

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
        Schema::drop('kilomeinformes');
    }
}

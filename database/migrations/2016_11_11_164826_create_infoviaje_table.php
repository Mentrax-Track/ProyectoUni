<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoviajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infoviaje', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('viaje_id')->unsigned();
            $table->foreign('viaje_id')
                ->references('id')->on('viajes')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->integer('informeviaje_id')->unsigned();
            $table->foreign('informeviaje_id')
                ->references('id')->on('informesviajes')
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
        Schema::drop('infoviaje');
    }
}

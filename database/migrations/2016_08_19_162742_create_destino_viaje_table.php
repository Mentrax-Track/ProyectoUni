<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinoViajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destino_viaje', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('destino_id')->unsigned();
            $table->integer('viaje_id')->unsigned();
            
            $table->foreign('destino_id')
                ->references('id')->on('destinos')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

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
        Schema::drop('destino_viaje');
    }
}

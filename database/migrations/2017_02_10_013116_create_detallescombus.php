<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallescombus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallescombus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vehiculo_id');
            $table->string('gasolina');
            $table->string('diesel');
            $table->string('gnv');
            $table->string('prega');
            $table->string('predi');
            $table->string('pregn');
            $table->string('toga');
            $table->string('todi');
            $table->string('togn');
            $table->date('fecha');
            
            $table->integer('combustible_id')->unsigned();
            $table->foreign('combustible_id')
                ->references('id')->on('combustibles')
                ->onUpdate('CASCADE');
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
        Schema::drop('detallescombus');
    }
}

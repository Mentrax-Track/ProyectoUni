<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKilomecanicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kilomecanicos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('hay');
            $table->string('aumento');
            $table->string('total');

            $table->integer('vehiculo_id')->unsigned();
            $table->foreign('vehiculo_id')
                ->references('id')->on('vehiculos');

            $table->integer('mecanico_id')->unsigned();
            $table->foreign('mecanico_id')
                ->references('id')->on('mecanicos');
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
        Schema::drop('kilomecanicos');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevolucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devoluciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('serial');
            $table->date('fecha');
            $table->string('nombre');
            $table->integer('cantidad');
            $table->string('detalle');
            $table->string('insertador');
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
        Schema::drop('devoluciones');
    }
}

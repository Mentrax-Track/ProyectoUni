<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeticionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peticiones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('orden');
            $table->date('fecha');
            $table->integer('cantidad');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('insertador');
            $table->integer('solicitud_id')->unsigned();
            $table->foreign('solicitud_id')
                ->references('id')->on('solicitudes');
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
        Schema::drop('peticiones');
    }
}

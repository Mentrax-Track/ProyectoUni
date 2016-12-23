<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMecanicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mecanicos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->integer('cantidad');
            $table->string('unidad');
            $table->string('trabajo');
            $table->string('marca');
            $table->string('codigo');
            $table->string('observacion');
            $table->string('kilometraje');
            $table->string('insertador');   
            $table->integer('solicitud_id')->unsigned();
            
            $table->foreign('solicitud_id')
                ->references('id')->on('solicitudes')
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
        Schema::drop('mecanicos');
    }
}

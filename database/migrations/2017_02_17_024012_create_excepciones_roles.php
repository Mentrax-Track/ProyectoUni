<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExcepcionesRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('excepciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('chofer_id');
            $table->string('tipo');
            $table->string('lugar');
            $table->date('fecha');
            $table->integer('roles_id')->unsigned();
            
            $table->foreign('roles_id')
                ->references('id')->on('roles')
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
        Schema::drop('excepciones');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolviajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rolviajes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('chofer');
            $table->string('tipoa');
            $table->string('tipob');
            $table->string('tipoc');
            $table->dateTime('fecha');
            $table->integer('rol_id')->unsigned();

            $table->foreign('rol_id')
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
        Schema::drop('rolviajes');
    }
}

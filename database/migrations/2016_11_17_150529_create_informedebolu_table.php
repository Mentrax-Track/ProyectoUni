<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformedeboluTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informesdebolu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('combus');
            $table->string('peaje');
            $table->string('impre');
            $table->string('totalcopeim');
            $table->integer('informesviaje_id')->unsigned();
            $table->foreign('informesviaje_id')
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
        Schema::drop('informesdebolu');
    }
}

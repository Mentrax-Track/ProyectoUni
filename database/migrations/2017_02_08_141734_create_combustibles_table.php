<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCombustiblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('combustibles', function (Blueprint $table) {
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
            $table->timestamp('fecha');
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
        Schema::drop('combustibles');
    }
}

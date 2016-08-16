<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateViajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viajes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('entidad');
            $table->string('objetivo');
            $table->integer('dias');
            $table->integer('numero');
            $table->date('fecha_inicial');
            $table->date('fecha_final');
            $table->integer('user_id');
            $table->integer('vehiculo_id');
            $table->integer('destino_id')->unsigned();
            $table->timestamps();

           /* $table->foreign('user_id')
                ->references('id')->on('users')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('vehiculo_id')
                ->references('id')->on('vehiculos')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');*/

            $table->foreign('destino_id')
                ->references('id')->on('destinos')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('viajes');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('numero');
            $table->integer('gasolina_id')->unsigned();
            $table->integer('diesel_id')->unsigned();
            $table->integer('gnv_id')->unsigned();
            $table->integer('recargue_id')->unsigned();
            
            $table->foreign('recargue_id')
                ->references('id')->on('recargues')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('gasolina_id')
                ->references('id')->on('gasolina')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('diesel_id')
                ->references('id')->on('diesel')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('gnv_id')
                ->references('id')->on('gnv')
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
        Schema::drop('pedidos');
    }
}

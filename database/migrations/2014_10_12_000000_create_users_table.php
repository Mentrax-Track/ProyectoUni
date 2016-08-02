<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('cedula')->nullable();
            $table->string('celular')->nullable();
            $table->string('facultad')->nullable();
            $table->string('carrera')->nullable();
            $table->string('materia')->nullable();
            $table->string('sigla')->nullable();
            $table->enum('tipo',['administrador','supervisor','chofer','mecánico','encargado']);
            $table->string('email')->nullable();
            $table->string('password', 60);
            $table->boolean('active')->default(true);
            $table->rememberToken();
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
        Schema::drop('users');
    }
}

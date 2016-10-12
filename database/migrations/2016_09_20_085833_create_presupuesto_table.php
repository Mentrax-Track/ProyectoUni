<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresupuestoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presupuestos', function (Blueprint $table) {
            $table->increments('id');
            //Datos del usuario
            $table->integer('vehiculo');
            $table->integer('chofer');
            $table->integer('encargado');
            $table->string('entidad');
            $table->date('fecha_sa');
            // Viaje y Rutas
            $table->string('division1');
            $table->integer('viaje_id')->unsigned();
           
            //Divicion del kilometraje
            $table->string('combustible1');

            //Descripcion del Presupuesto
            $table->string('cantidad1');
            $table->string('precio1');
            $table->string('total1C');
            $table->string('cantidad2');
            $table->string('precio2');
            $table->string('total2VC');
            $table->string('cantidad3');
            $table->string('precio3');
            $table->string('total3VP');
            $table->string('cantidad4');
            $table->string('precio4');
            $table->string('total4VF');
            $table->string('cantidad5');
            $table->string('precio5');
            $table->string('total5P');
            $table->string('cantidad6');
            $table->string('precio6');
            $table->string('total6M');
            $table->string('cantidad7');
            $table->string('precio7');
            $table->string('total7G');
            $table->string('total8T');

            //Registro del viaje
            $table->string('responsable');
            $table->string('materia');
            $table->string('sigla');
            $table->integer('ndocentes');
            $table->time('hsalida');
            $table->time('hllegada');

            //Transporte Público
            $table->string('p1');
            $table->string('r1');
            $table->string('c1');
            $table->string('t1');
            $table->string('p2');
            $table->string('r2');
            $table->string('c2');
            $table->string('t2');
            $table->string('p3');
            $table->string('c3');
            $table->string('t3');
            $table->string('tt');
            $table->string('diferencia');
            $table->string('nota');            

            $table->foreign('viaje_id')
                ->references('id')->on('viajes')
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
        Schema::drop('presupuestos');
    }
}

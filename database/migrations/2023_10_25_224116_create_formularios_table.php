<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('codigo')->nullable();
            $table->string('nroformulario')->nullable();
            $table->date('fecha')->nullable();
            $table->string('detalletrabajo')->nullable();
            $table->string('codigonuevo')->nullable();
            $table->string('nombre')->nullable();
            $table->string('gerencia')->nullable();
            $table->string('regional')->nullable();
            $table->string('departamento')->nullable();
            $table->date('fechaactual')->nullable();

            $table->integer('usuario_id')->unsigned();
            $table->integer('cpu_id')->unsigned();
            $table->integer('monitor_id')->unsigned();
            $table->integer('teclado_id')->unsigned();
            $table->integer('raton_id')->unsigned();
            $table->integer('impresora_id')->unsigned();
            $table->integer('parlante_id')->unsigned();
            $table->integer('otrodispositivo_id')->unsigned();

            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('cpu_id')->references('id')->on('cpus');
            $table->foreign('monitor_id')->references('id')->on('monitors');
            $table->foreign('teclado_id')->references('id')->on('teclados');
            $table->foreign('raton_id')->references('id')->on('ratons');
            $table->foreign('impresora_id')->references('id')->on('impresoras');
            $table->foreign('parlante_id')->references('id')->on('parlantes');
            $table->foreign('otrodispositivo_id')->references('id')->on('otrodispositivos');

            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('formularios');
    }
}

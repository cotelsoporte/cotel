<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProgramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('outlook')->nullable();
            $table->string('word')->nullable();
            $table->string('exce')->nullable();
            $table->string('so')->nullable();
            $table->string('antivirus')->nullable();
            $table->string('internet')->nullable();
            $table->string('correo')->nullable();
            $table->string('otrosprogramas')->nullable();
            $table->string('nombreequipo')->nullable();
            $table->string('direccionip')->nullable();

            $table->integer('cpu_id')->unsigned();

            $table->foreign('cpu_id')->references('id')->on('cpus');

            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('programas');
    }
}

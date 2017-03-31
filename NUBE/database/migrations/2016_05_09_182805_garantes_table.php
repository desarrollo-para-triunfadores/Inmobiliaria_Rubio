<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GarantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('dni');
            $table->string('fecha_nac');
            $table->string('telefono');
            $table->string('descripcion');
            $table->integer('localidad_id')->unsigned();
            $table->foreign('localidad_id')->references('id')->on('localidades')->onDelete('cascade');
            $table->string('domicilio');

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
        Schema::drop('garantes');
    }
}

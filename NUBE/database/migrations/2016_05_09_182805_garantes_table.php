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
            $table->integer('persona_id');
            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');
            $table->string('descripcion',500)->nullable();
            $table->integer('localidad_id')->unsigned();
            $table->foreign('localidad_id')->references('id')->on('localidades')->onDelete('cascade');
            $table->string('domicilio')->nullable();

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

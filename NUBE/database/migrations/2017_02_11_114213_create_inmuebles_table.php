<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInmueblesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->increments('id');

            $table->enum('condicion', ['Alquiler', 'Venta', 'Alquiler/Venta']);

            $table->string('valorVenta');
            $table->string('valorAlquiler');
            $table->string('superficie');
            $table->string('direccion');
            $table->string('piso');
            $table->string('numDepto');
            $table->string('fechaHabilitacion');
            $table->string('fechaFinContrato');
            $table->string('linkVideo');
            $table->string('expensaValor');
            $table->string('expensaDescripcion',500)->nullable();
            $table->string('longitud');
            $table->string('latitud');
            $table->string('cantidadAmbientes');
            $table->string('disponible');
            $table->string('descripcion',500)->nullable();


            $table->integer('tipo_id')->unsigned();
            $table->foreign('tipo_id')->references('id')->on('tipos')->onDelete('cascade');

            $table->integer('garante_id')->unsigned()->nullable();
            $table->foreign('garante_id')->references('id')->on('garantes')->onDelete('cascade');

            $table->integer('inquilino_id')->unsigned()->nullable();
            $table->foreign('inquilino_id')->references('id')->on('inquilinos')->onDelete('cascade');

            $table->integer('barrio_id')->unsigned();
            $table->foreign('barrio_id')->references('id')->on('barrios')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('inmuebles');
    }

}

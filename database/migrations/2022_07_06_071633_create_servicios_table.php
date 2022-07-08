<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 10)->index();
            $table->string('estado', 20);
            $table->string('numero_de_pasajero', 15);
            $table->string('numero_de_vuelo', 15);
            $table->string('descripcion', 200);
            
            $table->string('codigo_chofer', 10);
            $table->string('codigo_vehiculo', 10);
            $table->foreign('codigo_chofer')->references('codigo')->on('chofers');
            $table->foreign('codigo_vehiculo')->references('codigo')->on('vehiculos');
      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservaciones', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 10)->index();

            $table->string('cedula_cliente', 11);
            $table->string('codigo_servicio', 10);
            $table->string('codigo_tipo_pago', 10);
            $table->string('codigo_proveedor', 10);

            $table->foreign('cedula_cliente')->references('cedula')->on('clientes');
            $table->foreign('codigo_servicio')->references('codigo')->on('servicios');
            $table->foreign('codigo_tipo_pago')->references('codigo')->on('tipo_de_pagos');
            $table->foreign('codigo_proveedor')->references('codigo')->on('proveedores');

            $table->string('fecha_hora_servicio', 20);
            $table->string('fecha_hora_reservacion', 20);
    
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservaciones');
    }
}

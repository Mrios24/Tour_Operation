<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 10)->index();
            $table->decimal('comisiones');

            $table->string('codigo_gastos', 10);
            $table->string('codigo_servicio', 10);
            $table->foreign('codigo_gastos')->references('codigo')->on('gastos');
            $table->foreign('codigo_servicio')->references('codigo')->on('servicios');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reportes');
    }
}

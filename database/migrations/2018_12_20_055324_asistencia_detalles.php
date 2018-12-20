<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AsistenciaDetalles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencia_detalles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('asistencias_id');
            $table->foreign('asistencias_id')->references('id')->on('asistencias');
            $table->unsignedInteger('contratos_id');
            $table->foreign('contratos_id')->references('id')->on('contratos');
            $table->unsignedInteger('labores_id');
            $table->foreign('labores_id')->references('id')->on('labores');
            $table->decimal('monto',10,2);
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
        Schema::dropIfExists('asistencia_detalles');
    }
}

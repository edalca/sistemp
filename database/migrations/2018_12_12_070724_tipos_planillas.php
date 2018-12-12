<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TiposPlanillas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_planillas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo',20);
            $table->string('tipo_planilla',50);
            $table->unsignedInteger('tipos_contratos_id');
            $table->foreign('tipos_contratos_id')->references('id')->on('tipos_contratos');
            $table->unsignedInteger('frecuencia_pagos_id');
            $table->foreign('frecuencia_pagos_id')->references('id')->on('frecuencia_pagos');
            $table->boolean('sueldo_base_labor')->default(false);
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
        Schema::dropIfExists('tipos_planillas');
    }
}

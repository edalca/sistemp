<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PlanillaDetalles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planilla_detalles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('planillas_id');
            $table->foreign('planillas_id')->references('id')->on('planillas');
            $table->unsignedInteger('contratos_id');
            $table->foreign('contratos_id')->references('id')->on('contratos');
            $table->date('fecha');
            $table->numeric('monto',15,2);
            $table->boolean('base');
            $table->boolean('devengado');
            $table->boolean('deduccion');
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
        Schema::dropIfExists('planilla_detalles');
    }
}

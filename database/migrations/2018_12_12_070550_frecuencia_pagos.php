<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FrecuenciaPagos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frecuencia_pagos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo',20);
            $table->string('frecuencia_pago',50);
            $table->integer('frecuencia_dias');
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
        Schema::dropIfExists('frecuencia_pagos');
    }
}

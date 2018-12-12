<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Empleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo',20);
            $table->string('numero_cedula',20);
            $table->string('nombre_completo',300);
            $table->date('fecha_nacimiento');
            $table->unsignedInteger('estados_civiles_id');
            $table->foreign('estados_civiles_id')->references('id')->on('estados_civiles');
            $table->unsignedInteger('sectores_id');
            $table->foreign('sectores_id')->references('id')->on('sectores');
            $table->string('direccion',300);
            $table->string('telefono1',20);
            $table->string('telefono2',20);
            $table->unsignedInteger('ocupaciones_id');
            $table->foreign('ocupaciones_id')->references('id')->on('ocupaciones');
            $table->string('grado_academico',50);
            $table->unsignedInteger('sexos_id');
            $table->foreign('sexos_id')->references('id')->on('sexos');
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
        Schema::dropIfExists('empleados');
    }
}

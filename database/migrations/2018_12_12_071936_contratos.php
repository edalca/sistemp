<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contratos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo',20);
            $table->date('fecha_contrato');
            $table->date('fecha_final_contrato')->nullable();
            $table->unsignedInteger('tipos_planillas_id');
            $table->foreign('tipos_planillas_id')->references('id')->on('tipos_planillas');
            $table->decimal('sueldo_base',12,2);
            $table->unsignedInteger('puestos_id');
            $table->foreign('puestos_id')->references('id')->on('puestos');
            $table->unsignedInteger('empleados_id');
            $table->foreign('empleados_id')->references('id')->on('empleados');
            $table->string('nombre_contacto',250);
            $table->string('telefono_contacto',15);
            $table->string('observacion',300);
            $table->boolean('activo')->default(true);
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
        Schema::dropIfExists('contratos');
    }
}

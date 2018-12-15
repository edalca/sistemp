<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Planillas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planillas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo',20);
            $table->unsignedInteger('tipos_planillas_id');
            $table->foreign('tipos_planillas_id')->references('id')->on('tipos_planillas');
            $table->date('fecha_desde');
            $table->date('fecha_hasta');
            $table->unsignedInteger('estados_id');
            $table->foreign('estados_id')->references('id')->on('estados');
            $table->boolean('activo');
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
        Schema::dropIfExists('planillas');
    }
}

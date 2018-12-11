<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sectores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo',20);
            $table->string('sector',50);
            $table->unsignedInteger('sector_niveles_id');
            $table->unsignedInteger('municipios_id');
            $table->foreign('sector_niveles_id')->references('sector_niveles')->on('id');
            $table->foreign('municipios_id')->references('municipios')->on('id');
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
        Schema::dropIfExists('sectores');
    }
}

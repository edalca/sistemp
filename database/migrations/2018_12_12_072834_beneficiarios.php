<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Beneficiarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_completo',300);
            $table->unsignedInteger('parentescos_id');
            $table->foreign('parentescos_id')->references('id')->on('parentescos');
            $table->unsignedInteger('contratos_id');
            $table->foreign('contratos_id')->references('id')->on('contratos');
            $table->decimal('porcentaje',3,2);
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
        Schema::dropIfExists('beneficiarios');
    }
}

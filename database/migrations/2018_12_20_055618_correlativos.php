<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Correlativos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correlativos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('correlativo');
            $table->string('formato',20);
            $table->integer('año');
            $table->string('modulo',100);
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
        Schema::dropIfExists('correlativos');
    }
}

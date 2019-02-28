<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PreguntaEncuesta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregunta_encuesta', function (Blueprint $table) {
            $table->bigIncrements('id_pregunta_encuesta');
            $table->unsignedBigInteger('fk_pregunta');
            $table->unsignedBigInteger('fk_encuesta');
            $table->timestamps();
            // $table->primary('id_pregunta_encuesta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pregunta_encuesta');
    }
}

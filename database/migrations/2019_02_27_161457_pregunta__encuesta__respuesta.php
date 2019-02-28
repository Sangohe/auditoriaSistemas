<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PreguntaEncuestaRespuesta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregunta_er', function (Blueprint $table) {
            $table->bigIncrements('id_pregunta_encuesta_respuesta');
            $table->unsignedBigInteger('fk_pregunta_encuesta');
            $table->unsignedBigInteger('fk_respuesta_ofrecida');
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
        Schema::dropIfExists('pregunta_encuesta_respuesta');
    }
}

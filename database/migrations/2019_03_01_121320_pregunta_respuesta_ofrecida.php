<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PreguntaRespuestaOfrecida extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregunta_respuesta_ofrecida', function (Blueprint $table) {
            $table->bigIncrements('id_pregunta_respuesta_ofrecida');
            $table->unsignedBigInteger('fk_pregunta');
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
        Schema::dropIfExists('pregunta_respuesta_ofrecida');
    }
}

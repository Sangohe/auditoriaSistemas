<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PreguntaRespuestaOfrecidaUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregunta_respuesta_ofrecida_usuario', function (Blueprint $table) {
            $table->bigIncrements('id_pregunta_respuesta_ofrecida_usuario');
            $table->unsignedBigInteger('fk_pregunta_respuesta_ofrecida');
            $table->unsignedBigInteger('fk_usuario');
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
        Schema::dropIfExists('pregunta_respuesta_ofrecida_usuario');
    }
}

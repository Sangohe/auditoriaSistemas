<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pregunta_encuesta', function (Blueprint $table) {
            $table->foreign('fk_encuesta')->references('id_encuesta')->on('encuestas')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fk_pregunta')->references('id_pregunta')->on('preguntas')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('pregunta_er', function (Blueprint $table) {
            $table->foreign('fk_pregunta_encuesta')->references('id_pregunta_encuesta')->on('pregunta_encuesta')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fk_respuesta_ofrecida')->references('id_respuesta_ofrecida')->on('respuesta_ofrecida')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('respuestas', function (Blueprint $table) {
            $table->foreign('fk_pregunta_encuesta_respuesta')->references('id_pregunta_encuesta_respuesta')->on('pregunta_er')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fk_usuario')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

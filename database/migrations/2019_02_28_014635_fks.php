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
        Schema::table('pregunta_respuesta_ofrecida', function (Blueprint $table) {
            $table->foreign('fk_pregunta')->references('id_pregunta')->on('preguntas')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fk_respuesta_ofrecida')->references('id_respuesta_ofrecida')->on('respuesta_ofrecida')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('preguntas', function (Blueprint $table) {
            $table->foreign('fk_encuesta')->references('id_encuesta')->on('encuestas')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('pregunta_respuesta_ofrecida_usuario', function (Blueprint $table) {
            $table->foreign('fk_pregunta_respuesta_ofrecida')->references('id_pregunta_respuesta_ofrecida')->on('pregunta_respuesta_ofrecida')
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
        Schema::table('pregunta_respuesta_ofrecida', function (Blueprint $table) { 
            $table->dropForeign('pregunta_respuesta_ofrecida_fk_pregunta_foreign');
            $table->dropForeign('pregunta_respuesta_ofrecida_fk_respuesta_ofrecida_foreign');
        });

        Schema::table('preguntas', function (Blueprint $table) { 
            $table->dropForeign('preguntas_fk_encuesta_foreign');
        });

        Schema::table('pregunta_respuesta_ofrecida_usuario', function (Blueprint $table) { 
            $table->dropForeign('pregunta_respuesta_ofrecida_usuario_fk_pregunta_respuesta_ofrecida_foreign');
            $table->dropForeign('pregunta_respuesta_ofrecida_usuario_fk_usuario_foreign');
        });
    }
}

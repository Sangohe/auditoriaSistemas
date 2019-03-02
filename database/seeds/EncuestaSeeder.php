<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Pregunta;
use App\Encuesta;
use App\Respuesta_Ofrecida;
use App\preguntaROUsuario;
use App\preguntaRO;

class EncuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // $usuarios = User::all();
        // foreach ($usuarios as $usuario) {
        //     $encuesta = Encuesta::create();
        //     //pregunta uno
        //     $pregunta1 = Pregunta::create([
        //         'fk_encuesta' => $encuesta->id_encuesta,
        //         'texto' => '¿Planos para facilitar el diseño de la red?'
        //     ]);

        //     //pregunta dos
        //     $pregunta2 = Pregunta::create([
        //         'fk_encuesta' => $encuesta->id_encuesta,
        //         'texto' => '¿Instalacion de canaletas, puntos, cableado y otros?'
        //     ]);

        //     //pregunta tres
        //     $pregunta3 = Pregunta::create([
        //         'fk_encuesta' => $encuesta->id_encuesta,
        //         'texto' => '¿Instalacion de las tarjetas de red?'
        //     ]);

        //     //pregunta cuatro
        //     $pregunta4 = Pregunta::create([
        //         'fk_encuesta' => $encuesta->id_encuesta,
        //         'texto' => '¿Configuracion de las tarjetas de red?'
        //     ]);

        //     //pregunta cinco
        //     $pregunta5 = Pregunta::create([
        //         'fk_encuesta' => $encuesta->id_encuesta,
        //         'texto' => '¿Instalacion del router?'
        //     ]);

        //     //pregunta seis
        //     $pregunta6 = Pregunta::create([
        //         'fk_encuesta' => $encuesta->id_encuesta,
        //         'texto' => '¿Configuracion del router?'
        //     ]);

        //     //pregunta siete
        //     $pregunta7 = Pregunta::create([
        //         'fk_encuesta' => $encuesta->id_encuesta,
        //         'texto' => '¿Configuracion Ip y mascaras de la red?'
        //     ]);

        //     //pregunta ocho
        //     $pregunta8 = Pregunta::create([
        //         'fk_encuesta' => $encuesta->id_encuesta,
        //         'texto' => '¿Asignacion de grupo de trabajo?'
        //     ]);

        //     //pregunta nueve
        //     $pregunta9 = Pregunta::create([
        //         'fk_encuesta' => $encuesta->id_encuesta,
        //         'texto' => '¿Comprobacion de la eficacia del trabajo?'
        //     ]);

        //     $preguntas = [$pregunta1, $pregunta2, $pregunta3, $pregunta4, $pregunta5, $pregunta6, $pregunta7, $pregunta8, $pregunta9];

        //     foreach ($preguntas as $pregunta) {
        //         $preguntaRO = preguntaRO::create([
        //             'fk_pregunta' => $pregunta->id_pregunta,
        //             'fk_respuesta_ofrecida' => rand ( 0 , 2 ) 
        //         ]);
        //         $preguntasRO = preguntaRO::all();
        //         foreach ($preguntasRO as $p) {
        //             $preguntaROUsuario = preguntaROUsuario::create([
        //                 'fk_usuario' => $usuario->id,
        //                 'fk_pregunta_ro' => $p->id_pregunta_ro
        //             ]);
        //         }
                
        //     }
        // }
    }
}

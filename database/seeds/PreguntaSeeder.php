<?php

use Illuminate\Database\Seeder;
use App\Pregunta;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //pregunta uno
        Pregunta::create([
            'texto' => 'Planos para facilitar el diseño de la red'
        ]);

        //pregunta dos
        Pregunta::create([
            'texto' => 'Instalacion de canaletas, puntos, cableado y otros'
        ]);

        //pregunta tres
        Pregunta::create([
            'texto' => 'Instalacion de las tarjetas de red'
        ]);

        //pregunta cuatro
        Pregunta::create([
            'texto' => 'Configuracion de las tarjetas de red'
        ]);

        //pregunta cinco
        Pregunta::create([
            'texto' => 'Instalacion del router'
        ]);

        //pregunta seis
        Pregunta::create([
            'texto' => 'Configuracion del router'
        ]);

        //pregunta siete
        Pregunta::create([
            'texto' => 'Configuracion Ip y mascaras de la red'
        ]);

        //pregunta ocho
        Pregunta::create([
            'texto' => 'Asignacion de grupo de trabajo'
        ]);

        //pregunta nueve
        Pregunta::create([
            'texto' => 'Comprobacion de la eficacia del trabajo'
        ]);
    }
}

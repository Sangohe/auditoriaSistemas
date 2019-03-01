<?php

use Illuminate\Database\Seeder;

class preguntaSeeder extends Seeder
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
            'pregunta' => 'Planos para facilitar el diseño de la red'
        ]);

        //pregunta dos
        Pregunta::create([
            'pregunta' => 'Instalacion de canaletas, puntos, cableado y otros'
        ]);

        //pregunta tres
        Pregunta::create([
            'pregunta' => 'Instalacion de las tarjetas de red'
        ]);

        //pregunta cuatro
        Pregunta::create([
            'pregunta' => 'Configuracion de las tarjetas de red'
        ]);

        //pregunta cinco
        Pregunta::create([
            'pregunta' => 'Instalacion del router'
        ]);

        //pregunta seis
        Pregunta::create([
            'pregunta' => 'Configuracion del router'
        ]);

        //pregunta siete
        Pregunta::create([
            'pregunta' => 'Configuracion Ip y mascaras de la red'
        ]);

        //pregunta ocho
        Pregunta::create([
            'pregunta' => 'Asignacion de grupo de trabajo'
        ]);

        //pregunta nueve
        Pregunta::create([
            'pregunta' => 'Comprobacion de la eficacia del trabajo'
        ]);
    }
}

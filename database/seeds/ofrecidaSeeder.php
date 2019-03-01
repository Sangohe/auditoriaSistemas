<?php

use Illuminate\Database\Seeder;
use App\Respuesta_ofrecida;

class ofrecidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Respuesta_ofrecida::create([
            'texto' => 'Realizado'
        ]);

        Respuesta_ofrecida::create([
            'texto' => 'No realizado'
        ]);

        Respuesta_ofrecida::create([
            'texto' => 'No necesario'
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Encuesta;
use App\Pregunta;
use App\Respuesta_Ofrecida;

class PreguntaROController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $encuesta = Encuesta::create();

        //pregunta uno
        $pregunta1 = Pregunta::create([
            'fk_encuesta' => $encuesta->id_encuesta,
            'texto' => '¿Planos para facilitar el diseño de la red?'
        ]);

        //pregunta dos
        $pregunta2 = Pregunta::create([
            'fk_encuesta' => $encuesta->id_encuesta,
            'texto' => '¿Instalacion de canaletas, puntos, cableado y otros?'
        ]);

        //pregunta tres
        $pregunta3 = Pregunta::create([
            'fk_encuesta' => $encuesta->id_encuesta,
            'texto' => '¿Instalacion de las tarjetas de red?'
        ]);

        //pregunta cuatro
        $pregunta4 = Pregunta::create([
            'fk_encuesta' => $encuesta->id_encuesta,
            'texto' => '¿Configuracion de las tarjetas de red?'
        ]);

        //pregunta cinco
        $pregunta5 = Pregunta::create([
            'fk_encuesta' => $encuesta->id_encuesta,
            'texto' => '¿Instalacion del router?'
        ]);

        //pregunta seis
        $pregunta6 = Pregunta::create([
            'fk_encuesta' => $encuesta->id_encuesta,
            'texto' => '¿Configuracion del router?'
        ]);

        //pregunta siete
        $pregunta7 = Pregunta::create([
            'fk_encuesta' => $encuesta->id_encuesta,
            'texto' => '¿Configuracion Ip y mascaras de la red?'
        ]);

        //pregunta ocho
        $pregunta8 = Pregunta::create([
            'fk_encuesta' => $encuesta->id_encuesta,
            'texto' => '¿Asignacion de grupo de trabajo?'
        ]);

        //pregunta nueve
        $pregunta9 = Pregunta::create([
            'fk_encuesta' => $encuesta->id_encuesta,
            'texto' => '¿Comprobacion de la eficacia del trabajo?'
        ]);

        $preguntas = [$pregunta1, $pregunta2, $pregunta3, $pregunta4, $pregunta5, $pregunta6, $pregunta7, $pregunta8, $pregunta9];
        $respuestas_ofrecidas = Respuesta_Ofrecida::all();
        return view('survey.createSurvey', compact('preguntas', 'respuestas_ofrecidas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

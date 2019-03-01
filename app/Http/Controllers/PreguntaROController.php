<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Encuesta;
use App\Pregunta;
use App\Respuesta_Ofrecida;
use Illuminate\Support\Facades\Auth;
use App\preguntaROUsuario;
use App\preguntaRO;

class PreguntaROController extends Controller
{
    public function index()
    {
        //
    }

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

    public function store(Request $request)
    {
        foreach ($request->except('_token') as $pregunta => $respuesta) {
            $temp = new PreguntaRO();
            
            $temp -> fk_pregunta = $pregunta;
            $temp -> fk_respuesta_ofrecida = $respuesta;
            // dd($pregunta);
            $temp -> save();
            // dd($temp);
            PreguntaROUsuario::create([
                'fk_usuario' => Auth::id(),
                'fk_pregunta_ro' => $temp -> id_pregunta_ro
            ]);
        }
        // dd($temp->id_pregunta_ro);
        return redirect()->route('home');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\User;
use App\preguntaROUsuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __contruct(){
        dd("skdncmslk");
    }

    public function show($id=null)
    {
        $c1 = 0;
        $c2 = 0;
        $c3 = 0;
        
        $t1 = 0;
        $t2 = 0;
        $t3 = 0;
        
        if (Auth::check()) {
            $id = Auth::id();
        }
        $usuario = User::find($id);
        if(!empty($usuario)){
            $respuestas = preguntaROUsuario::where('fk_usuario', $id)->join('pregunta_respuesta_ofrecida','pregunta_respuesta_ofrecida.id_pregunta_ro','pregunta_respuesta_ofrecida_usuario.fk_pregunta_ro')->join('respuesta_ofrecida', 'respuesta_ofrecida.id_respuesta_ofrecida','pregunta_respuesta_ofrecida.fk_respuesta_ofrecida')->get();
            $respuestasTotal = preguntaROUsuario::join('pregunta_respuesta_ofrecida','pregunta_respuesta_ofrecida.id_pregunta_ro','pregunta_respuesta_ofrecida_usuario.fk_pregunta_ro')->join('respuesta_ofrecida', 'respuesta_ofrecida.id_respuesta_ofrecida','pregunta_respuesta_ofrecida.fk_respuesta_ofrecida')->get();

            foreach ($respuestas as $respuesta) {
                switch ($respuesta->id_respuesta_ofrecida) {
                    case 1:
                        $c1++;
                        break;
                    case 2:
                        $c2++;
                        break;
                    case 3:
                        $c3++;
                        break;
                }
            }

            foreach ($respuestasTotal as $respuesta) {
                switch ($respuesta->id_respuesta_ofrecida) {
                    case 1:
                        $t1++;
                        break;
                    case 2:
                        $t2++;
                        break;
                    case 3:
                        $t3++;
                        break;
                }
            }
            return view('user.showUser', ['user' => $usuario, 'contador' => [$c1, $c2, $c3, $t1, $t2, $t3]]);
        } else {
            return back();
        }
    }

    public function edit($id)
    {
        $id = Auth::id();
        $usuario = User::find($id);
        if(!empty($usuario)){
            return view('user.editUser', ['user' => $usuario]);
        } else {
            return back();
        }
    }

    public function update(Request $request, $id)
    {
        $id = Auth::id();
        $usuario = User::find($id);
        if(!empty($usuario)){
            $usuario->fill($request->all());
            if($usuario->save()){
                return redirect()->route('user.show', $id);
            } else {
                return back();
            }
        } else {
            return back();
        }
    }

    public function password(Request $request)
    {
        $id = Auth::id();
        $usuario = User::find($id);
        if (Hash::check($request->last_password, $usuario->password)) {
            $usuario->password = Hash::make($request->password);
            if ($usuario->save()) {
                return redirect()->route('user.show', $id);
            } else {
                return back();
            }
        } else {
            return back();
        }
    }

    public function form()
    {
        $id = Auth::id();
        $usuario = User::find($id);
        return view('user.editPassword', ['user' => $usuario]);
    }
}

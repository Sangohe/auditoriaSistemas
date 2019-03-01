<?php

namespace App\Http\Controllers;

use App\User;
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
        if (Auth::check()) {
            $id = Auth::id();
        }
        $usuario = User::find($id);
        if(!empty($usuario)){
            return view('user.showUser', ['user' => $usuario]);
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

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class preguntaROUsuario extends Model
{
    protected $table = 'pregunta_respuesta_ofrecida_usuario';
    protected $fillable = [
        'fk_usuario', 'fk_pregunta_ro',
    ];
}

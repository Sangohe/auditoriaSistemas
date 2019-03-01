<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class preguntaRO extends Model
{
    protected $table = 'pregunta_respuesta_ofrecida';
    protected $primaryKey = "id_pregunta_ro";
    protected $fillable = [
        "id_pregunta_ro", 'fk_pregunta', 'fk_respuesta_ofrecida',
    ];
}

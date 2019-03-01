<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $primaryKey = 'id_pregunta';
    protected $fillable = ['fk_encuesta', 'texto'];
}

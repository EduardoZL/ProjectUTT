<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListProfessor extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'email', 'curp', 'rfc', 'telefono', 'puesto', 'contrato',
        'nvlEstudio', 'tituloRecibido', 'carreraFin', 'institucionEstudioRealizado',
        'año_estudio_inicio_final', 'exp_docencia', 'perfil_deseable', 'image'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListProfessor extends Model
{
    protected $fillable = [
        'full_name', 'email', 'telefono', 'puesto', 'image'
    ];
}

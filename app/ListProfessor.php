<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListProfessor extends Model
{
    protected $table = 'list_professors';
    protected $fillable = [
        'noEmpleado', 'full_name', 'email', 'puesto', 'carrera'
    ];

    public function curriculum() {
        return $this->belongsTo(CurriculumProfessor::class);
    }
}

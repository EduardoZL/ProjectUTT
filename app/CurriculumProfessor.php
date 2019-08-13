<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CurriculumProfessor extends Model
{
    protected $table = 'curriculum_professors';
    protected $fillable = [
        'fechaNacimiento', 'curp', 'rfc', 'gradoAcademico', 'nCurso', 'fechaCapacitacion', 'horaCapacitacion', 'evaluacionDocente', 'ncuerpoAcademico',
        'lineaInvestigacion', 'gradoConsolidacion', 'añoRegistro', 'tipo', 'titulo', 'autores', 'descripcion', 'pais', 'isbn', 'issn', 'nombreAsignatura',
        'programaEducativo', 'periodo', 'nomProyecto',  'nomEmpresa', 'fechaInicio', 'fechaTermino', 'tipoGestion', 'funcionEncomendada', 'organoBeneficiado', 'año'
    ];
}

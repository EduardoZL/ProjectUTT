<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CurriculumProfessor extends Model
{
    protected $table = 'curriculum_professors';
    protected $fillable = [
        'fechaNacimiento', 'curp', 'rfc', 'gradoAcademico', 'nCurso', 'fechaCapacitacion', 'horaCapacitacion', 'Enero_Abril_A', 'Mayo_Agosto_A', 'Septiembre_Diciembre_A', 'Enero_Abril_T', 'Mayo_Agosto_T', 'Septiembre_Diciembre_T', 'ncuerpoAcademico',
        'lineaInvestigacion', 'gradoConsolidacion', 'añoRegistro', 'tipo', 'titulo', 'autor', 'descripcion', 'pais', 'añoPro', 'isbn', 'issn', 'nombreAsignatura',
        'programaEducativo', 'periodo', 'nomProyecto',  'nomEmpresa', 'fechaInicio', 'fechaTermino', 'tipoGestion', 'funcionEncomendada', 'organoBeneficiado', 'año',
        'professors_id'
    ];

    public function list_professors() {
        
        return $this->hasMany(ListProfessor::class);
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculumProfessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculum_professors', function (Blueprint $table) {            
            $table->bigIncrements('id');            
            //Seccion Curriculum
            //Datos generales.
            $table->date('fechaNacimiento')->nullable();
            $table->string('curp')->nullable();
            $table->string('rfc')->nullable();
            $table->string('gradoAcademico')->nullable();
            //Capacitacion.
            $table->string('nCurso')->nullable();
            $table->date('fechaCapacitacion')->nullable();
            $table->string('horaCapacitacion')->nullable();
            //Evaluacion docente
            //$table->enum('evaluacionDocente', ['Enero-Abril', 'Mayo-Agosto', 'Septiembre-Diciembre']);
            $table->string('Enero-Abril-A')->nullable();
            $table->string('Mayo-Agosto-A')->nullable();
            $table->string('Septiembre-Diciembre-A')->nullable();
            $table->string('Enero-Abril-T')->nullable();
            $table->string('Mayo-Agosto-T')->nullable();
            $table->string('Septiembre-Diciembre-T')->nullable();
            //Cuerpo academico.
            $table->string('ncuerpoAcademico')->nullable();
            $table->string('lineaInvestigacion')->nullable();
            $table->string('gradoConsolidacion')->nullable();
            $table->string('añoRegistro')->nullable();
            //Produccion academica.
            $table->string('tipo')->nullable();
            $table->string('titulo')->nullable();
            $table->string('autor')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('pais')->nullable();
            $table->string('añoPro')->nullable();
            //SBN es un código de 13 digitos normalizado internacional para libros
            $table->string('isbn')->nullable();
            /* ISSN es un código de 8 dígitos que sirven para identificar publicaciones periódicas y recursos continuos de toda clase y 
            editada en cualquier soporte, ya sean impresos en papel o en formato digital. */
            $table->string('issn')->nullable();
            //Docencia.
            $table->string('nombreAsignatura')->nullable();
            $table->string('programaEducativo')->nullable();
            $table->string('periodo')->nullable();
            //Estadia en empresa.
            $table->string('nomProyecto')->nullable();
            $table->string('nomEmpresa')->nullable();
            $table->date('fechaInicio')->nullable();
            $table->date('fechaTermino')->nullable();
            //Gestion academica.
            $table->string('tipoGestion')->nullable();
            $table->string('funcionEncomendada')->nullable();
            $table->string('organoBeneficiado')->nullable();
            $table->string('año')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curriculum_professors');
        /* Schema::table('list_professors', function (Blueprint $table){
            $table->dropForeign('list_professors_professor_id_foreign');
        }); */
    }
}

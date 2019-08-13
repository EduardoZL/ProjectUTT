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
            //$table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->integer('professors_id')->unsigned();
            $table->foreign('professors_id')->reference('id')->on('list_professors');
            //Seccion Curriculum
            //Datos generales.
            $table->date('fechaNacimiento');
            $table->string('curp');
            $table->string('rfc');
            $table->string('gradoAcademico');
            //Capacitacion.
            $table->string('nCurso');
            $table->date('fechaCapacitacion');
            $table->dateTime('horaCapacitacion');
            //Evaluacion docente
            $table->enum('evaluacionDocente', ['Enero-Abril', 'Mayo-Agosto', 'Septiembre-Diciembre']);
            //Cuerpo academico.
            $table->string('ncuerpoAcademico');
            $table->string('lineaInvestigacion');
            $table->string('gradoConsolidacion');
            $table->string('añoRegistro');
            //Produccion academica.
            $table->string('tipo');
            $table->string('titulo');
            $table->string('autores');
            $table->string('descripcion');
            $table->string('pais');
            //SBN es un código de 13 digitos normalizado internacional para libros
            $table->string('isbn');
            /* ISSN es un código de 8 dígitos que sirven para identificar publicaciones periódicas y recursos continuos de toda clase y 
            editada en cualquier soporte, ya sean impresos en papel o en formato digital. */
            $table->string('issn');
            //Docencia.
            $table->string('nombreAsignatura');
            $table->string('programaEducativo');
            $table->string('periodo');
            //Estadia en empresa.
            $table->string('nomProyecto');
            $table->string('nomEmpresa');
            $table->date('fechaInicio');
            $table->date('fechaTermino');
            //Gestion academica.
            $table->string('tipoGestion');
            $table->string('funcionEncomendada');
            $table->string('organoBeneficiado');
            $table->year('año');
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
        //Schema::dropIfExists('curriculum_professors');
        Schema::table('list_professors', function (Blueprint $table){
            $table->dropForeign('list_professors_professor_id_foreign');
        });
    }
}

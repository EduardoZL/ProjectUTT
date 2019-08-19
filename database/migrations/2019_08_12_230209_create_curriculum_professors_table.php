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
            //1er curso
            $table->string('nCurso')->nullable();
            $table->date('fechaCapacitacion')->nullable();
            $table->string('horaCapacitacion')->nullable();
            //2do curso
            $table->string('dosnCurso')->nullable();
            $table->date('dosfechaCapacitacion')->nullable();
            $table->string('doshoraCapacitacion')->nullable();
            //3er curso
            $table->string('tresnCurso')->nullable();
            $table->date('tresfechaCapacitacion')->nullable();
            $table->string('treshoraCapacitacion')->nullable();
            //Evaluacion docente
            //$table->enum('evaluacionDocente', ['Enero-Abril', 'Mayo-Agosto', 'Septiembre-Diciembre']);
            $table->string('Enero_Abril_A')->nullable();
            $table->string('Mayo_Agosto_A')->nullable();
            $table->string('Septiembre_Diciembre_A')->nullable();
            $table->string('Enero_Abril_T')->nullable();
            $table->string('Mayo_Agosto_T')->nullable();
            $table->string('Septiembre_Diciembre_T')->nullable();
            //Cuerpo academico.
            $table->string('ncuerpoAcademico')->nullable();
            $table->string('lineaInvestigacion')->nullable();
            $table->string('gradoConsolidacion')->nullable();
            $table->string('añoRegistro')->nullable();
            //Produccion academica.
            //Libro o revista
            $table->string('tipo')->nullable();
            $table->string('titulo')->nullable();
            $table->string('autor')->nullable();
            $table->string('descripcion', 255)->nullable();
            $table->string('pais')->nullable();
            $table->string('añoPro')->nullable();
            $table->string('isbn')->nullable();            
            $table->string('issn')->nullable();
            //Articulo
            $table->string('arttipo')->nullable();
            $table->string('arttitulo')->nullable();
            $table->string('artautor')->nullable();
            $table->string('artdescripcion', 255)->nullable();
            $table->string('artpais')->nullable();
            $table->string('artañoPro')->nullable();
            $table->string('artisbn')->nullable();            
            $table->string('artissn')->nullable();
            //Periodico
            $table->string('pertipo')->nullable();
            $table->string('pertitulo')->nullable();
            $table->string('perautor')->nullable();
            $table->string('perdescripcion', 255)->nullable();
            $table->string('perpais')->nullable();
            $table->string('perañoPro')->nullable();
            $table->string('perisbn')->nullable();            
            $table->string('perissn')->nullable();
            //Docencia.
            //1 materia
            $table->string('nombreAsignatura')->nullable();
            $table->string('programaEducativo')->nullable();
            $table->string('periodo')->nullable();
            //2 materia
            $table->string('dosnombreAsignatura')->nullable();
            $table->string('dosprogramaEducativo')->nullable();
            $table->string('dosperiodo')->nullable();
            //3 materia
            $table->string('tresnombreAsignatura')->nullable();
            $table->string('tresprogramaEducativo')->nullable();
            $table->string('tresperiodo')->nullable();
            //4 materia
            $table->string('cuatronombreAsignatura')->nullable();
            $table->string('cuatroprogramaEducativo')->nullable();
            $table->string('cuatroperiodo')->nullable();
            //5 materia
            $table->string('cinconombreAsignatura')->nullable();
            $table->string('cincoprogramaEducativo')->nullable();
            $table->string('cincoperiodo')->nullable();
            //
            $table->string('seisnombreAsignatura')->nullable();
            $table->string('seisprogramaEducativo')->nullable();
            $table->string('seisperiodo')->nullable();
            //
            $table->string('sietenombreAsignatura')->nullable();
            $table->string('sieteprogramaEducativo')->nullable();
            $table->string('sieteperiodo')->nullable();
            //Estadia en empresa.
            $table->string('nomProyecto')->nullable();
            $table->string('nomEmpresa')->nullable();
            $table->date('fechaInicio')->nullable();
            $table->date('fechaTermino')->nullable();
            //Gestion academica.
            //1
            $table->string('tipoGestion')->nullable();
            $table->string('funcionEncomendada')->nullable();
            $table->string('organoBeneficiado')->nullable();
            $table->string('año')->nullable();
            //2
            $table->string('dostipoGestion')->nullable();
            $table->string('dosfuncionEncomendada')->nullable();
            $table->string('dosorganoBeneficiado')->nullable();
            $table->string('dosaño')->nullable();
            //3
            $table->string('trestipoGestion')->nullable();
            $table->string('tresfuncionEncomedada')->nullable();
            $table->string('tresorganoBeneficiado')->nullable();
            $table->string('tresaño')->nullable();
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

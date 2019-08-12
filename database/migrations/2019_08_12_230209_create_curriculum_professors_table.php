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
            /* $table->string('');
            $table->date('fechaNacimiento');
            $table->string('curp');
            $table->string('rfc');
            $table->string('gradoAcademico');
            $table->string('nCurso');
            $table->date('fechaCapacitacion');
            $table->dateTime('horaCapacitacion');
            $table->enum('evaluacionDocente', ['Enero-Abril', 'Mayo-Agosto', 'Septiembre-Diciembre']);
            $table->string('ncuerpoAcademico');
            $table->string('lineaInvestigacion');
            $table->string('gradoConsolidacion');
            $table->string('añoRegistro');
            $table->string(''); */
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
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProfessorIdToCurriculumProfessors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('curriculum_professors', function (Blueprint $table) {
            $table->bigInteger('professors_id')->unsigned();
            $table->foreign('professors_id')->references('id')->on('list_professors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('curriculum_professors', function (Blueprint $table) {
            $table->dropForeign('curriculum_professors_professors_id_foreign');
        });
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListProfessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_professors', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');  
            $table->string('noEmpleado');          
            $table->string('full_name');            
            $table->string('email');
            $table->string('puesto');
            $table->string('carrera');
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
        Schema::dropIfExists('list_professors');
    }
}

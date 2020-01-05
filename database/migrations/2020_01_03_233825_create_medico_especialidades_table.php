<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicoEspecialidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medico_especialidades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idMedico');
            $table->unsignedBigInteger('idEspecialidade');
            $table->foreign('idMedico')->references('id')->on('medicos')->onDelete('cascade');;
            $table->foreign('idEspecialidade')->references('id')->on('especialidades')->onDelete('cascade');;
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
        Schema::dropIfExists('medico_especialidades');
    }
}

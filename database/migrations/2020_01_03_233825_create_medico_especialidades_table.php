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
            $table->unsignedBigInteger('id_medico');
            $table->unsignedBigInteger('id_especialidade');
            $table->foreign('id_medico')->references('id')->on('medicos');
            $table->foreign('id_especialidade')->references('id')->on('especialidades');
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

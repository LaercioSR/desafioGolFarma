<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    public function especialidades() {
        return $this->belongsToMany('App\Especialidade', 'medico_especialidades', 'idMedico', 'idEspecialidade');
    }

    public function medicoEspecialidades() {
        return $this->hasMany('App\MedicoEspecialidade', 'idMedico');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    public function especialidades() {
        //dd($this->belongsToMany('App\Especialidade', 'medico_especialidades', 'idMedico', 'idEspecialidade'));
        return $this->belongsToMany('App\Especialidade', 'medico_especialidades', 'idMedico', 'idEspecialidade');
    }
}

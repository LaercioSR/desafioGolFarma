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

    public function especialidade1() {
        if(count($this->especialidades) != 0 ) {
            $especialidade = $this->especialidades[0]->id;
            return $especialidade;
        }
        return 0;
    }

    public function especialidade2() {
        if(count($this->especialidades) == 2) {
            $especialidade = $this->especialidades[1]->id;
            return $especialidade;
        }
        return 0;
    }
}

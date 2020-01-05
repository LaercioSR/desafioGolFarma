<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicoEspecialidade extends Model
{
    public function medico() {
        return $this->belongsTo('App\Medico');
    }

    public function especialidade() {
        return $this->belongsTo('App\Especialidade');
    }
}

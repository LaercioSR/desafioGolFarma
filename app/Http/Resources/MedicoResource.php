<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MedicoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'crm' => $this->crm,
            'telefone' => $this->telefone,
            'especialidade1' => $this->especialidade1(),
            'especialidade2' => $this->especialidade2(),
        ];
    }
}

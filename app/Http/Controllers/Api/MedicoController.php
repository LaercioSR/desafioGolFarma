<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MedicoCollection;
use App\Http\Resources\MedicoResource;
use App\MedicoEspecialidade;
use Illuminate\Http\Request;
use App\Medico;
use Illuminate\Support\Facades\DB;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new MedicoCollection(Medico::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medico = new Medico();
        $medico->nome = $request->input('nome');
        $medico->crm = $request->input('crm');
        $medico->telefone = $request->input('telefone');
        $medico  ->save();


        if($request->input('especialidade1') != 0) {
            $medicoEspecialidade = new MedicoEspecialidade();
            $medicoEspecialidade->idMedico = $medico->id;
            $medicoEspecialidade->idEspecialidade = $request->input('especialidade1');
            $medicoEspecialidade->save();
        }

        if($request->input('especialidade2') != 0) {
            $medicoEspecialidade = new MedicoEspecialidade();
            $medicoEspecialidade->idMedico = $medico->id;
            $medicoEspecialidade->idEspecialidade = $request->input('especialidade2');
            $medicoEspecialidade->save();
        }

        return response([
            'data' => new MedicoResource($medico)
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            return new MedicoResource(Medico::findOrFail($id));

        } catch (\Exception $e) {
            return response()->json([
                'info' => 'error',
                'result' => 'Nenhum médico foi encontrado com o ID informado',
                'error' => $e->getMessage(),
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $medico = Medico::findOrFail($id);


        if($request->nome != null) {
            $medico->nome = $request->input('nome');
        }

        if($request->crm != null) {
            $medico->crm = $request->input('crm');
        }

        if($request->telefone != null) {
            $medico->telefone = $request->input('telefone');
        }

        $medico->save();

        $especialidades = DB::table('medico_especialidades')->where('idMedico', $medico->id)->get();

        foreach($especialidades as $especialidade) {
            MedicoEspecialidade::findOrFail($especialidade->id)->delete();
        }

        if($request->input('especialidade1') != 0) {
            $medicoEspecialidade = new MedicoEspecialidade();
            $medicoEspecialidade->idMedico = $medico->id;
            $medicoEspecialidade->idEspecialidade = $request->input('especialidade1');
            $medicoEspecialidade->save();
        }

        if($request->input('especialidade2') != 0) {
            $medicoEspecialidade = new MedicoEspecialidade();
            $medicoEspecialidade->idMedico = $medico->id;
            $medicoEspecialidade->idEspecialidade = $request->input('especialidade2');
            $medicoEspecialidade->save();
        }

        return response([
            'data' => new MedicoResource($medico)
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medico = Medico::findOrFail($id);
        $medico->delete();

        return response(null, 204);
    }

    public function pesquisarMedico(Request $request) {
        $medicoBusca = DB::table('medicos')->where('nome', $request->pesquisa)->orWhere('crm', $request->pesquisa)->get();
        $medico = null;
        if($medicoBusca->isNotEmpty()) {
            $medico = Medico::findOrFail($medicoBusca->toArray()[0]->id);
        }

        return new MedicoResource($medico);
    }
}

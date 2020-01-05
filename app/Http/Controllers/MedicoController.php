<?php

namespace App\Http\Controllers;

use App\Especialidade;
use App\Medico;
use App\MedicoEspecialidade;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicos = Medico::all();

        return view('welcome', compact('medicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $especialidades = Especialidade::all();

        return view('cadastrarMedico', compact('especialidades'));
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

        return redirect("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function show(Medico $medico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function edit(Medico $medico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medico $medico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medico = Medico::findOrFail($id);
        $medico->delete();

        return redirect('/');
    }
}

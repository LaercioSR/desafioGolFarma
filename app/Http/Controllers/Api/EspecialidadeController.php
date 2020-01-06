<?php

namespace App\Http\Controllers\Api;

use App\Especialidade;
use App\Http\Controllers\Controller;
use App\Http\Resources\EspecialidadeCollection;
use App\Http\Resources\EspecialidadeResource;

class EspecialidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new EspecialidadeCollection(Especialidade::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response([
            'data' => new EspecialidadeResource(Especialidade::findOrFail($id))
        ], 201);
    }
}

<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('medicos', 'Api\MedicoController');
Route::post('/medicos/pesquisa', 'Api\MedicoController@pesquisarMedico');
Route::get('/especialidades/{especialidade}', 'Api\EspecialidadeController@show');
Route::get('/especialidades', 'Api\EspecialidadeController@index');

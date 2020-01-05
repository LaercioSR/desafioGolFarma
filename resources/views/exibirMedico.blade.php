<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Desafio GolFarma</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app_style.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container content-tasknow">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <form class="form-inline my-2 my-lg-0" action="/medico/pesquisar" method = "GET">
                        @csrf
                        <input class="form-control mr-sm-2 col-md-8" type="search" placeholder="Pesquisar CRM ou Nome" aria-label="pesquisar">
                        <button class="btn btn-danger my-2 my-sm-0 col-md-3" type="submit">Pesquisar</button>
                    </form>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <br/>
                    <br/>


                    <table class="table table-light">
                        <thead class="thead-light">
                        <tr>

                            <th scope="col" colspan="3">Médicos</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($medicos) == 0)
                            <tr>
                                <td>Não há médicos cadastrados</td>
                            </tr>
                        @else
                            @foreach($medicos as $medico)
                                <tr>
                                    <td>
                                        <form>
                                            <div class="row">
                                                <label class="label-descricao col-md-2" for="nome">Nome: </label>
                                                <p id="nome" class="col-md-10">{{ $medico->nome }}</p>
                                            </div>

                                            <div class="row">
                                                <label class="label-descricao col-md-1" for="crm">CRM: </label>
                                                <p id="crm" class="col-md-6">{{ $medico->crm }}</p>

                                                <label class="label-descricao col-md-2" for="telefone">Telefone: </label>
                                                <p id="telefone" class="col-md-3">{{ $medico->telefone }}</p>
                                            </div>
                                            <div class="row">
                                                <label class="label-descricao col-md-4" for="especialidades">Especialidades: </label>
                                                @foreach($medico->especialidades as $especialidade)
                                                    <p id="especialidade" class="col-md-4">{{ $especialidade->descricao }}</p>
                                                @endforeach
                                            </div>
                                        </form>
                                    </td>
                                    <td>
                                        <form action = "{{route('medico.destroy', $medico->id)}}" method = "POST">
                                            @csrf
                                            <a class = "btn" href="{{route('medico.edit', $medico->id)}}"><img src="{{ asset('imagens/edit.png') }}" title="Editar"></a>
                                            @method('DELETE')
                                            <button type = "submit" class = "btn btn-link"><img src="{{ asset('imagens/delete.png') }}" title="Excluir"></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>


                </div>
            </div>
        </div>

        <a class = "btn" href="{{route('medico.create')}}"><img src="{{ asset('imagens/mais.png') }}" class="button-mais"/></a>
    </body>
</html>

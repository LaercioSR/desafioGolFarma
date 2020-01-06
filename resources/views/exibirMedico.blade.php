<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Desafio GolFarma - @if($medico != null)
                                        {{$medico->nome}}
                                    @else
                                        Médico não Encontrado
                                    @endif
        </title>

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
                    <form class="form-inline" action="/medico/pesquisa" method = "post">
                        @csrf
                        <input class="form-control mr-sm-2 col-md-8" type="text" placeholder="Pesquisar CRM ou Nome" id="pesquisa" name="pesquisa"  value="">
                        <button class="btn btn-danger col-md-3" type="submit">Pesquisar</button>
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

                            <th scope="col" colspan="3">Médico</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($medico == null)
                            <tr>
                                <td>Médico não encontrado</td>
                            </tr>
                        @else
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
                        @endif
                        </tbody>
                    </table>


                </div>
            </div>
        </div>

        <a class = "btn" href="{{route('medico.create')}}"><img src="{{ asset('imagens/mais.png') }}" class="button-mais"/></a>
    </body>
</html>

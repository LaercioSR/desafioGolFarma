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
                <div class="col-md-8">
                    <br/>
                    <br/>
                    <h1>Médicos</h1>


                    <table class="table table-light">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col" colspan="2">Nome</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--
                        @if(count($tiposTarefasUser) == 0)
                            <tr>
                                <td>Não existe médico cadastrados</td>
                            </tr>
                        @else
                            @foreach($tiposTarefasUser as $tipoTarefa)
                                <tr>
                                    <td>{{$tipoTarefa->descricao}}</td>
                                    <td>
                                        <form action = "{{route('tipotarefa.destroy', $tipoTarefa->id)}}" method = "POST">
                                            @csrf
                                            <a class = "btn" href="{{route('tipotarefa.edit', $tipoTarefa->id)}}"><img src="{{ asset('imagens/edit.png') }}" title="Editar"></a>
                                            @method('DELETE')
                                            <button type = "submit" class = "btn btn-link"><img src="{{ asset('imagens/delete.png') }}" title="Excluir"></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        php>
                        --}}
                        </tbody>
                    </table>


                </div>
            </div>
        </div>

        <a class = "btn" href=""><img src="{{ asset('imagens/mais.png') }}" class="button-mais"/></a>
    </body>
</html>

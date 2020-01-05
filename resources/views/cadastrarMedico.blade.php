<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Desafio GolFarma - Cadastrar Médico</title>

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
                    <form action = "{{route('medico.store')}}" method = "POST" class="" id="form-tarefa">
                        @csrf
                        <div class="titulo centralizar">
                            <br/>
                            <br/>
                            <br/>
                            <br/>
                            <br/>
                            <br/>
                            <p class="titulo-texto">Cadastro de Médico</p>
                        </div>
                        <div class = "form-group">
                            <br/>
                            <br/>
                            <br/>
                            <label for="titulo" class="pos-titulo">Nome</label>
                            <input type = "text" class = "form-control" id="nome" name="nome" maxlength="30" required>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="crm">CRM</label>
                                <input type = "text" class = "form-control" id="crm" name="crm" maxlength="13" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="telefone">Telefone</label>
                                <input type = "text" class = "form-control" id="telefone" name="telefone" maxlength="15" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="especialidade1">Especialidades 1</label>
                                <select id="especialidade1" class="form-control" name="especialidade1" required>
                                    <option value="0">Especialidades 1...</option>
                                    @foreach($especialidades as $especialidade)
                                        <option value="{{$especialidade->id}}">{{$especialidade->descricao}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="especialidade2">Especialidades 2</label>
                                <select id="especialidade2" class="form-control" name="especialidade2" required>
                                    <option value="0">Especialidades 2...</option>
                                    @foreach($especialidades as $especialidade)
                                        <option value="{{$especialidade->id}}">{{$especialidade->descricao}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <br/>
                        <button class = "btn btn-tasknow centralizar" type = "submit">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>

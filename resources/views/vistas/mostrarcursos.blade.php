<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Mostrar Cursos</title>
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    </head>

    <body>
        <div class="">  

            @include("layouts.cabecera")

            
            <div class="container">
                <h1>Listado de cursos</h1>
                <div class="card-columns">
                    @foreach($cursos as $curso)
                        <div class="  card bg-warning">
                            <div class="card-body text-center">
                                <h2>{{$curso->nombre}}</h2>
                                <p class="card-text"><b>Fecha de inicio: </b>{{$curso->inicio}} - <b>Numero de horas: </b>{{$curso->horas}} - <b>Id profesor: </b>{{$curso->profe_id}} - <b>Dificultad: </b>{{$curso->dificultad}} -</p>
                            </div>
                        </div>
                  @endforeach
                </div>
            </div>
            @include("layouts.pie")
        </div>


        <script src="{{asset('js/jquery3.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
    </body>
</html>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Mostrar notasporalumno</title>
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    </head>

    <body>
        <div class="">  

            @include("layouts.cabecera")

            <h1>Listado de Notas por Alumno</h1>
            
            @foreach($resultados as $resultado)
            <p>Id alumno: {{$resultado->alumno_id}} -- Id Examen: {{$resultado->examen_id}}  -- Fecha: {{$resultado->fecha}}  -- nota: {{$resultado->nota}}  </p>
            
             @endforeach
                @include("layouts.pie")


                <script src="{{asset('js/jquery3.min.js')}}"></script>
                <script src="{{asset('js/popper.min.js')}}"></script>
                <script src="{{asset('js/bootstrap.min.js')}}"></script>
                </body>
                </html>

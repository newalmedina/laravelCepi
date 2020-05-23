<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Mostrar alumnos</title>
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    </head>

    <body>
        <div class="">  
           
            @include("layouts.cabecera")
            
             <h1>Listado de Alumnos</h1>
            <table id="mytable" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>DNI</th>
                        <th>TelÃ©fono</th>
                        <th>Curso_ID</th>            
                    </tr>
                </thead>
                <tbody>
                    @foreach($alumnos    as $alumno)
                    <tr>
                        <td>{{$alumno->id}}</td>
                        <td>{{$alumno->nombre}}</td>
                        <td>{{$alumno->apellidos}}</td>
                        <td>{{$alumno->dni}}</td>
                        <td>{{$alumno->telefono}}</td>
                        <td>{{$alumno->curso_id}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                    @include("layouts.pie")
                    </div>


                <script src="{{asset('js/jquery3.min.js')}}"></script>
                <script src="{{asset('js/popper.min.js')}}"></script>
                <script src="{{asset('js/bootstrap.min.js')}}"></script>
                </body>
                </html>

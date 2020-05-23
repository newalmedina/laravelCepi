<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Mostrar Profesores</title>
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    </head>

    <body>
        <div class="">  
           
            @include("layouts.cabecera")
            
             <h1>Listado de Profesores</h1>
            <table id="mytable" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Profe_id</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Alumno_ID</th>
                        <th>Curso_ID</th>            
                    </tr>
                </thead>
                <tbody>
                    @foreach($profes    as $profe)
                    <tr>
                        <td>{{$profe->id}}</td>
                        <td>{{$profe->profe_id}}</td>
                        <td>{{$profe->nombre}}</td>
                        <td>{{$profe->apellidos}}</td>
                        <td>{{$profe->alumno_id}}</td>
                        <td>{{$profe->curso_id}}</td>
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

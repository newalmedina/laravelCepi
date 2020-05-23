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
            
             <h1>Listado de Notas</h1>
            <table id="mytable" class="table table-striped">
                <thead>
                    <tr>
                         <th>ID alumno</th>
                        <th>Nombre y Apellidoss Alumno</th>
                        <th>Nombre Profesor</th>
                        <th>Curso</th>
                        <th>Nota</th>
                                
                    </tr>
                </thead>
                <tbody>
                    @foreach($notas    as $nota)
                    <tr>
                        <td>{{$nota->idAlumno}}</td>
                        <td>{{$nota->nombreAlumno}} {{$nota->apellidos}} </td>
                        <td>{{$nota->nombreProfe}}</td>
                        <td>{{$nota->curso}}</td>
                        <td>{{$nota->nota}}</td>
                       
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

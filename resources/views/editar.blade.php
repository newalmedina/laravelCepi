@extends("plantillas.plantillabase")
@section("cuerpo")
<section class="row">
    <div class="col-sm-10 offset-sm-1 pt-3 pb-3">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
                <strong>Error!</strong> Formulario Editar Alumnos.<br><br>
                <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                </ul>
        </div>
        @endif
        @if(Session::has('success'))
        <div class="alert alert-info">
                {{Session::get('success')}}
        </div>
        @endif
        <h3 class="panel-title"><i class="fas fa-edit"></i> Editar Alumno: {{$alumno->id}}</h3><hr>
            <form method="POST" action="{{route('formulario.update',$alumno->id)}}"  role="form">
                {{ csrf_field() }}
            <input type="hidden" value="PATCH" name="_method">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre del alumno" value  ="{{$alumno->nombre}}">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" name="apellidos" id="apellidos" class="form-control input-sm" placeholder="Apellidos del alumno" value ="{{$alumno->apellidos}}">
                </div>
            </div>            
            <div class="form-row">
                <div class="form-group col-md-4">
                    <input type="text" name="dni" id="dni" class="form-control input-sm" placeholder="D.N.I del alumno" value ="{{$alumno->dni}}">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" name="telefono" id="telefono" class="form-control input-sm" placeholder="Teléfono del alumno" value="{{$alumno->telefono}}">
                </div>
            
            <div class="form-group col-md-4">
                    <input type="text" name="curso_id" id="curso_id" class="form-control input-sm" placeholder="ID del curso contratado" value="{{$alumno->curso_id}}">
            </div>
                </div>
            <input type="submit"  value="Actualizar" class="btn btn-success btn-block">
            <a href="/inicio" class="btn btn-info btn-block" >Volver a la página de inicio</a>
            
        </form>
    </div>
</section>

@endsection
@extends("plantillas.plantillabase")
@section("cuerpo")
<section class="row">
    <div class="col-sm-10 offset-sm-1 pt-3 pb-3">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
                <strong>Error!</strong> Formulario Altas Alumnos.<br><br>
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
        <h3 class="panel-title"><i class="fas fa-edit"></i> Nuevo Alumno</h3><hr>
        <form method="POST" action="{{route('formulario.store')}}"  role="form">
            {{ csrf_field() }}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre del alumno">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" name="apellidos" id="apellidos" class="form-control input-sm" placeholder="Apellidos del alumno">
                </div>
            </div>            
            <div class="form-row">
                <div class="form-group col-md-4">
                    <input type="text" name="dni" id="dni" class="form-control input-sm" placeholder="D.N.I del alumno">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" name="telefono" id="telefono" class="form-control input-sm" placeholder="Teléfono del alumno">
                </div>
            
            <div class="form-group col-md-4">
                    <input type="text" name="curso_id" id="curso_id" class="form-control input-sm" placeholder="ID del curso contratado">
            </div>
                </div>
            <input type="submit"  value="Guardar" class="btn btn-success btn-block">
            <a href="/inicio" class="btn btn-info btn-block" >Volver a la página de inicio</a>
            
        </form>
    </div>
</section>

@endsection
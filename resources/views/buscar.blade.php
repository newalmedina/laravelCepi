@extends("plantillas.plantillabase")
@section("cuerpo")
<section class="row">
    <div class="col-sm-10 offset-sm-1 pt-3 pb-3">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
                <strong>Error!</strong>Formulario Búsqueda.<br><br>
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
        <h3 class="panel-title"><i class="fas fa-edit"></i>Indique el Nombre y Apellidos del Alumno</h3><hr>
        <form method="POST" action="buscar"  role="form">
            {{ csrf_field() }}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre del alumno">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" name="apellidos" id="apellidos" class="form-control input-sm" placeholder="Apellidos del alumno">
                </div>
            </div>                        
            <input type="submit"  value="Buscar alumno" class="btn btn-success btn-block">
            <a href="/inicio" class="btn btn-info btn-block" >Volver a la página de inicio</a>
            
        </form>
    </div>
</section>

@endsection
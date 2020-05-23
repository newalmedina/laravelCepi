@extends("plantillas.plantillabase")
@section("cuerpo")
<section class="row">
    <div class="col-sm-10 offset-sm-1 pt-3 pb-3">

    @if($datos->count())
    @foreach($datos as $registro)
    <div class="row justify-content-md-center pt-3 pb-3">
        <div class="card" style="width: 28rem;">
          <div class="card-header">
            Datos del Alumno
          </div>
          <div class="card-body">            
              <p class="card-text">Nombre: <b>{{$registro->nombre}}</b></p>
            <p class="card-text">Apellidos: <b>{{$registro->apellidos}}</b></p>
            <p class="card-text">DNI: <b>{{$registro->dni}}</b></p>
            <p class="card-text">Teléfono: <b>{{$registro->telefono}}</b></p>
            <p class="card-text">ID del curso contratado: <b>{{$registro->curso_id}}</b></p>
            <a href="buscar" class="btn btn-warning">Regresar a la página de consultas</a>
          </div>
        </div>
    </div>
    @endforeach
    @else
    <div class="row justify-content-md-center pt-3 pb-3">
        <div class="card" style="width: 28rem;">
          <div class="card-header">
            Error en la Consulta
          </div>
          <div class="card-body">            
            <h5 class=""card-text>Error no hay ningún alumno con ese nombre</h5>
            <a href="buscar" class="btn btn-info">Regresar a la página de consultas</a>
          </div>
        </div>
    @endif
    </div>
    </div>
</section>


@endsection
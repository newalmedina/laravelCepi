@extends("plantillas.plantillabase")
@section("cuerpo")
@if(Session::has('success'))
        <div class="alert alert-info">
                {{Session::get('success')}}
        </div>
        @endif

<div class="row justify-content-md-center pt-3 pb-3">
  <div class="col-sm-6">
    <div class="card">
        <div class="card-header">
    Panel de Control
  </div>
  <div class="card-body">
    <h5 class="card-title">Gestión y trabajo con las tablas</h5>
    <p class="card-text">Alumnos, Cursos, Profes y Notas.</p>    
  </div>
    </div>
  </div>    
</div>
@endsection
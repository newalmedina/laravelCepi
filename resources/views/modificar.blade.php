@extends("plantillas.plantillabase")
@section("cuerpo")
<div class="row">
		<div class="col-md-12">
			<h1>Listado de Alumnos</h1>

		<table class="table  table-striped">
		  <thead>
		    <tr>
		      <th scope="col">ID</th>
		      <th scope="col">NOMBRE</th>
		      <th scope="col">APELLIDOS</th>
		      <th scope="col">TELEFONO</th>
		      <th scope="col">ID CURSO</th>
		      <th scope="col">EDITAR</th>
		      <th scope="col">BORRAR</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($alumnos as $alumno)
		    <tr>
		      <th scope="row">{{$alumno->id}}</th>
		      <td>{{$alumno->nombre}}</td>
		      <td>{{$alumno->apellidos}}</td>
		      <td>{{$alumno->telefono}}</td>
		      <td>{{$alumno->curso_id}}</td>
		      <td><a href="{{action('FormularioController@edit',$alumno->id)}}" class="btn btn-info">Editar</a></td>
		      <td>
		      	<form action="{{action('FormularioController@destroy',$alumno->id)}}" method="post">
		      		 {{ csrf_field() }}
          			<input type="hidden"  name="_method" value="DELETE">
		      		<input type="submit" class="btn btn-danger" value="Eliminar">
		      	</form>
		      </td>
		    </tr>	
		    @endforeach	    
		  </tbody>
		</table>
		</div>
		<div class="col-md-12 text-center">
			{{$alumnos->links()}}
		</div>
			

	
	
</div>
@endsection
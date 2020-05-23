<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">LaravelCEPI</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        
        <div class="dropdown">
            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Alumnos
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="{{route('formulario.create')}}">Altas</a>
              <a class="dropdown-item" href="/buscar">Consultas</a>
              <a class="dropdown-item" href="/modificar">Modificaciones</a>
            </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="fotos">Cursos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="fotos">Profes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="fotos">Notas</a>
      </li>
    </ul>
    
  </div>
</nav>
<!doctype html>
<html >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Styles -->

    </head>
    <body>
        <div class="flex-center position-ref full-height">          

            <div class="container-fluid">
                <!--menu navegacion-->
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                    <a class="navbar-brand" href="#">FOTOS</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Enlaces</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    MenÃº
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">OpciÃ³n 1</a>
                                    <a class="dropdown-item" href="#">OpciÃ³n 2</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">MÃ¡s opciones...</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Inactivo</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                        </form>
                    </div>
                </nav>

                <div class="row">
                    <?php 
                    for ($i = 0; $i < count($titulo); $i++): ?>
                        <div class="card col-md-4 mt-2">
                            <img class="card-img-top" style="width: 291px; height: 200px; margin:auto;" src="{{asset('galeria'.$fotos[$i])}}"  alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?=e($titulo[$i])?></h5>
                                <p class="card-text"><?=e($cuerpo[$i])?></p>
                                <p class="card-text"><small class="text-muted"><?=e($pie[$i])?></small></p>
                            </div>
                        </div>
                    <?php                         
                    endfor; ?>
                </div>
            </div>
        </div>
        <script src="{{asset('js/jquery3.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
    </body>
</html>

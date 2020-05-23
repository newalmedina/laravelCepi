<div id="carrousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#carrousel" data-slide-to="0" class="active"></li>
        <li data-target="#carrousel" data-slide-to="1"></li>
        <li data-target="#carrousel" data-slide-to="2"></li>
        <li data-target="#carrousel" data-slide-to="3"></li>
        <li data-target="#carrousel" data-slide-to="4"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img style="width:100%;height:850px;" src="{{asset('carrousel/imagen01.png')}}" alt="Los Angeles">
            
        </div>
        <div class="carousel-item">
            <img style="width:100%;height:850px;" src="{{asset('carrousel/imagen02.png')}}" alt="Chicago">
           
        </div>
        <div class="carousel-item">
            <img style="width:100%;height:850px;" src="{{asset('carrousel/imagen03.png')}}" alt="New York">
            
        </div>
        <div class="carousel-item">
            <img style="width:100%;height:850px;" src="{{asset('carrousel/imagen04.png')}}" alt="New York">
         
        </div>
        <div class="carousel-item">
            <img style="width:100%;height:850px;" src="{{asset('carrousel/imagen05.png')}}" alt="New York">
            
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#carrousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#carrousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>

</div>
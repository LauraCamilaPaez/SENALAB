@extends('layouts.plantilla')


@section('title','Home')

{{-- @extends('layouts.nav') --}}


@section('content')
    

<!-- CAROUSEL INDEX -->

<section class="espacio-1">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="img/s3.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>3500 Jóvenes del sur Córdoba se benefician con nuevo Sena en Montelíbano:Duque. </h5>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/s2.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Campaña de prevención en salud  sexual y reproductiva. </h5>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/s1.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Orientación ocupacional. </h5>
            </div>
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>


<div class="espacio-2">    
    <h4>Lorem ipsum dolor sit amet consectetur</h4>
    <br><br>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi magnam iusto, nulla omnis aperiam sequi odio, distinctio eum numquam neque molestias nostrum? Sequi eveniet temporibus deserunt voluptatum modi repudiandae cum.</p>
        <img src="img/naranja.png" alt="" class="espacio-2 img-fluid img-thumbnail mx-auto d-block">        
</div>

@endsection
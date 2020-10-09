<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/all/css/style.css">
    <title>Sena-lab</title>
</head>
<body style="background-color: #E1E1E1;">
<div class="container">

<!-- barra de navegacion -->

    <nav class="navbar navbar-dark bg-dark navbar-expand-md sticky-top">
        <a class="navbar-brand " href="index.html ">
            <img src="assets/img/lsena.jpg" width="40" height="40" class="d-inline-block align-top" alt="">
            Sena-lab
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

            <ul class="navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Inicio <span class="sr-only"></span></a>
                </li> 
                <li class="nav-item active">
                    <a class="nav-link" href="paginas/contactanos.html">Contactanos <span class="sr-only"></span></a>
                </li> 
                <li class="nav-item dropdown">
                    <a class=" nav-link  text-right" href="?m=login&c=Index" >Ingresar</a>
                </li>                    
            </ul>                
        </div>
    </nav>
    <!-- Formulario modal -->
<!-- 
    <div class="modal fade" id="ingreso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <h4 class="text-center modal-title col-11" id="exampleModalLabel">Iniciar Sesión</h4>
                    <button type="button" class="col-1 close ml-0" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Formulario de Ingreso
                    <form id="myForm" action=""  method="post">
                        <div class="form-group">                                
                            <input type="text" class="form-control" name="user" id="user" aria-describedby="emailHelp" placeholder="Usuario: admin" required>
                        </div>
                        <div class="form-group">                                
                            <input type="password" class="form-control" name="pass" id="pass" placeholder="password: 12345" required title="Escriba entre 5 y 8 caracteres">
                        </div>
                        <div class="row px-3 pb-3 mb-3">
                            <div class="form-group form-check col-6 m-0">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Recordar mis datos</label>
                            </div>
                            <a href="" class="col nav-link col-6 m-0 p-0 text-right">Olvidó su contraseña?</a>
                        </div>
                        <div class="text-center">
                             <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
                            <button type="button" id="btn-submit-ingreso" class="btn btn-success" onclick="validar();">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->


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
                <img class="d-block w-100" src="assets/img/s3.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>3500 Jóvenes del sur Córdoba se benefician con nuevo Sena en Montelíbano:Duque. </h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/s2.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Campaña de prevención en salud  sexual y reproductiva. </h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/s1.jpg" alt="Third slide">
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
            <img src="assets/img/naranja.png" alt="" class="espacio-2 img-fluid img-thumbnail mx-auto d-block">        
    </div>




    <footer class="text-center p-3 mb-2 bg-light text-white bg-dark"  >

        <p>Todos los derechos reservados a Sena-lab</p>
        <p class=" "> Copyright © 2020 </p>
                
    </footer>

</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
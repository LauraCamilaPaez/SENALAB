@extends('layouts.plantilla')

@section('title', 'home')

@section('content')
<div class="container">

    <!-- barra de navegacion -->
    
        <nav class="navbar navbar-light bg-light navbar-expand-md sticky-top">
            <a class="navbar-brand " href="index.html ">
                <img src="../img/lsena.jpg" width="40" height="40" class="d-inline-block align-top" alt="">
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
                        <a class="nav-link" href="index.html">Contactanos <span class="sr-only"></span></a>
                    </li> 
                    <li class="nav-item dropdown">
                        <a class=" nav-link dropdown-item text-right" href="#" data-toggle="modal" data-target="#ingreso">Ingresar</a>
                    </li>                    
                </ul>                
            </div>
        </nav>
    
        <!-- modal de Ingreso -->
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
                        <!-- Formulario de Ingreso-->
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
        </div>
    
        <div class="row espaciodiv">    
            <div class="col-md-8">
                <iframe class="img-fluid img-thumbnail mx-auto d-block" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15907.43493835043!2d-74.18271155000001!3d4.61927965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sco!4v1591332214385!5m2!1ses-419!2sco"  frameborder="0"  allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-md-4 mx-auto mb-4 text-center">
                <h6 class="text-uppercase font-weight-bold" > Contactanos </h6>
                <ul class="list-unstyled">
                    <li class="my-2">Telefono:</li>
                    <li class="my-2"> Correo: </li>
                    <li class="my-2" >Direccion </li>
                    <li class="my-2"></li>
                </ul>
    
            </div>
        </div>
    
    
    
    
        <footer class="text-center p-3 mb-2 bg-light text-dark"  >
    
            <p>Todos los derechos reservados a Sena-lab</p>
            <p class=" "> Copyright © 2020 </p>
                    
        </footer>
    
    </div>
@endsection
    


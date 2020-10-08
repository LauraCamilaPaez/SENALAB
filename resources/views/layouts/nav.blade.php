@extends('plantilla')


<nav class="navbar navbar-dark bg-dark navbar-expand-md sticky-top">
    <a class="navbar-brand " href="homepage ">
        <img src="img/lsena.jpg" width="40" height="40" class="d-inline-block align-top" alt="">
        Sena-lab
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

        <ul class="navbar-nav ">
            <li class="nav-item active">
                <a class="nav-link" href="homepage">Inicio <span class="sr-only"></span></a>
            </li> 
            <li class="nav-item active">
                <a class="nav-link" href="Certificado">Contactanos <span class="sr-only"></span></a>
            </li> 
            <li class="nav-item dropdown">
                <a class=" nav-link  text-right" href="#" data-toggle="modal" data-target="#ingreso">Ingresar</a>
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

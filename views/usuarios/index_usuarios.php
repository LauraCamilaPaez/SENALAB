<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body style="background-color: #E1E1E1;">
    <div class="container ">
        <!-- Barra de Navegación -->
        <nav class=" navbar  navbar-dark bg-dark navbar-expand-md sticky-top">
            <a class="navbar-brand " href="../index.html ">
                <img src="assets/img/lsena.jpg" width="40" height="40" class="d-inline-block align-top" alt="">
                Sena-lab
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">                
                <ul class="navbar-nav col-1 justify-content-start">
                    <li class="nav-item ">
                        <a class="nav-link" href="index-admin.html">Inicio <span class="sr-only"></span></a>
                    </li>                                        
                </ul>
                <ul class="navbar-nav col-9 justify-content-center"></ul>
                <ul class="navbar-nav col-2 justify-content-end pr-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Usuario
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-right" href="#">Configuración</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-right" href="../index.html">Salir</a>
                        </div>
                    </li>   
                </ul>
            </div>
        </nav>

    
        <section >
            <div class="col-9 py-3  ">
                <div class="card">
                    <div style="background: #e57816;" class="card-header text-center text-light pb-4">
                        Página principal usuario
                    </div>
                    <div class="card-body esdiv">
                        <p class="font-weight-bold m-0">Nombre</p>
                        <p>Nombre</p>
                        <p class="font-weight-bold m-0">Apellido</p>
                        <p>Apellido</p>
                        <p class="font-weight-bold m-0">Email</p>
                        <p>Email</p>
                        <p class="font-weight-bold m-0">Rol</p>
                        <p>Rol</p>
                    </div>
                </div>
            </div>
        </section>
    

      
    <div class="d-flex  justify-content-around mar mx-auto">
        
        <a href="#" type="button" class="btn btn-info "  aria-haspopup="true" aria-expanded="false">Editar Usuario</a>
        
        <div class="btn-group">
            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Enviar Incapacidades
            </button>
            <div class="dropdown-menu">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFileLang" lang="en">
                    <label class="custom-file-label" for="customFileLang">Seleccione archivo</label>
                </div>
            </div>
          </div> 
        <div class="btn-group">
            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Solicitar Certificados
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="modulos/1_usuarios/Usuario.html">Obra o Labor</a>
              <a class="dropdown-item" href="#">Termino Fijo</a>
              <a class="dropdown-item" href="#">Termino Indefinido</a>
            </div>
          </div> 
    </div>


    <footer class="text-center p-3 mb-2 bg-dark text-light  "  >

        <p>Todos los derechos reservados a Sena-lab</p>
        <p class=" "> Copyright © 2020 </p>
                
    </footer>



    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
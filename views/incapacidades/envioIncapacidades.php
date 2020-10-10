<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/all/css/style.css">
    <title>Enviar Incapacidad</title>
</head>
<body >


<nav class="navbar navbar-dark bg-dark navbar-expand-md sticky-top">
        <a class="navbar-brand" href="index.php">
            <img src="assets/img/lsena.jpg" width="40" height="40" class="d-inline-block align-top" alt="">
            Sena-lab
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

            <ul class="navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inicio <span class="sr-only"></span></a>
                </li> 
                <li class="nav-item active">
                    <a class="nav-link" href="">Contactanos <span class="sr-only"></span></a>
                </li> 
                <li class="nav-item dropdown">
                    <a class=" nav-link  text-right" href="?m=login&c=Index" >Ingresar</a>
                </li>                    
            </ul>                
        </div>
</nav>


<div class="container-incapacidades">
    <div class="row">
        <div class="col-md-8  offset-md-4">
            <form action="?c=Incapacidades&m=create" method = "POST" enctype = "multipart/form-data" class="form-incapacidades">
                <div class="form-group">
                    <label class="label-incapacidades" for="form">Correo</label>
                    <input type="correo" name="correo" class="form-control" placeholder="Introduce tu correo" required>
                    <label class="label-incapacidades" for="form">Descripción incapacidad</label>
                    <input type="text" name="descripcion" class="form-control" placeholder="Motivo incapacidad" required>
                    <label class="label-incapacidades" for="form">Agregar Incapacidad</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    <button type="submit" class="btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div> 
</div>

<footer class="text-center p-3 mb-2 bg-light text-white bg-dark">
    <p>Todos los derechos reservados a Sena-lab</p>
    <p class=" "> Copyright © 2020 </p>            
</footer>
</body>
</html>
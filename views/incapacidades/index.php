<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>incapacidades</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body style="background-color: #E1E1E1;">
    <div class="container ">
 <!-- Barra de Navegación -->
 <nav class=" navbar  navbar-dark bg-dark navbar-expand-md sticky-top">
            <a class="navbar-brand " href="?c=Admin&m=index">
                <img src="assets/img/lsena.jpg" width="40" height="40" class="d-inline-block align-top" alt="">
                Sena-lab
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">                
                <ul class="navbar-nav col-1 justify-content-start">
                    <li class="nav-item ">
                        <a class="nav-link" href="?c=Admin&m=index">Volver<span class="sr-only"></span></a>
                    </li>                                        
                </ul>
                <ul class="navbar-nav col-9 justify-content-center"></ul>
                <ul class="navbar-nav col-2 justify-content-end pr-0">
                     
                </ul>
            </div>
        </nav>



    <div class="container">
       <div class="row">
            <div class="col-md-12">
            <br><br>
            <br>
                <h1>Incapacidades</h1>
                <br>
                <br>
                
                <table class="table">

            
                    <tr>
                        <th>nombre</th>
                        <th>descripcion</th>
                        <th>pdf</th>
                        <th colspan=""></th>
                    </tr>
                     <?php  foreach(parent::c()  as $r){    ?>
                  
                    <tr>
                        <td><?php echo $r->correo ?></td>
                        <td><?php echo $r->descripcion ?></td>
                        <td><?php echo $r->pdf ?></td>
                        
                        <td>
                            

                           
                           
                        </td>
                    </tr>
     
                    <?php } ?>
                </table>
            </div> 
       </div>
    </div>
</div>
</body>
</html>
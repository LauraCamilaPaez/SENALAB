<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Tipo_documento</th>
                        <th scope="col">Numero_documento</th>
                        <th scope="col">C-R-U-D</th>
                    </tr>
                </thead>

                <?php
                    $i=0;
                    foreach(parent::request() as $r){
                    $i++;
                ?>

                <tbody>
                    <tr>
                        <th scope="row"><?php echo $r->id_usuario ?></th>
                        <td><?php echo $r->rol ?></td>
                        <td><?php echo $r->nombre ?></td>
                        <td><?php echo $r->apellido ?></td>
                        <td><?php echo $r->correo ?></td>
                        <td><?php echo $r->tipo_documento ?></td>
                        <td><?php echo $r->documento ?></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="?c=Usuarios&m=editar&id=<?php echo $r->id_usuario ?>" class="btn btn-warning btn-sm">Editar</a>
                                <a href="?c=Admin&m=destroy&id=<?php echo $r->id_usuario ?>" class="btn btn-danger btn-sm">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</div>

<a href="?c=Admin&m=create" class="btn btn-info"> <i class="fas fa-plus"></i> Crear usuarios</a>
<a href="?c=Admin&m=index" class="btn btn-danger"> <i class="fas fa-plus"></i> Salir</a>



</body>
</html>
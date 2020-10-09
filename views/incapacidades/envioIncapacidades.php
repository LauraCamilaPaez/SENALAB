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
<body>
    
<div class="container">
    <div class="row">
        <div class="col-md-8  offset-md-4">
            <form action="?c=Incapacidades&m=create" method = "POST" enctype = "multipart/form-data">
                <div class="form-group"><br>
                <br>
                <br>
                    <h3>Correo</h3>
                    <input type="correo" name="correo" class="form-control" placeholder="...@gmail.com.." require>
                    <h3>descripcion</h3>
                    <input type="text" name="descripcion" class="form-control" placeholder="Motivo incapacidad" require>
                    <h3>Pdf incapacidad</h3>
                    <center><input type="file" name="pdf"  require/></center>
                    <br>
                        <center><input type="submit"/></center>
                </div>
            </form>
        </div>
    </div> 
</div>

</body>
</html>
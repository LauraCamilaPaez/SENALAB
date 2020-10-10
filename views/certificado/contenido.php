<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Certificado_laboral</title>
    <style>
        #cuadro{
            position: absolute;
            left: 30px;
            top: 30px;
            width: 50px;
        }
    </style>
</head>
<body>
    
<?php
foreach(parent::request() as $request){
?>

    <div id="cuadro">
        <p><?php echo $request->nombre ?></p>
    </div>

<?php } ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Certificado_laboral</title>
    <style>
        #cuadro{
            position: absolute;
        }
    </style>
</head>
<body>
    
<?php
foreach(parent::request() as $request){
?>

    <div id="cuadro">
        <h1>Servicio Nacional de Aprendizaje - SENA </h1>
        <h2> Nit. 899.999034-1 </h2>
        <h2> Av. 1 de Mayo #33-98, Bogotá</h2>
        <h2>Bogotá (57 1) 3430111</h2>
        <h2>Nury Esmeralda Sastoque Espinosa</h2>
        <h2>Líder Bienestar al Aprendiz Centro Electricidad, Electrónica y Telecomunicaciones</h2>
        <h3>El (la) suscrito representante de la empresa <b>SENA</b></h3>
        <h2><b>CERTIFICA</b></h2>
        <p>Que el (la) señor (a) <p><?php echo $request->nombre ?></p> , identificado (a) con la cédula de ciudadanía No. 1000615160 y residente en Bogotá d.c, labora (ó) para esta empresa desde febrero del año 2018 hasta septiembre del año 2020, con un contrato a tiempo indefinido, desempeñando el cargo de: Instructor de Técnologo. Durante este tiempo, la persona ha devengado un salario mensual de: 3 500 000 pesos.
        </p>

        <p>
        Certificación que se expide por solicitud de la parte interesada en Bogotá, a los 9 días del mes de Octubre del 2020.
        </p>

        <p>
        Atento y Cordial.
        </p>

        <p>Gabriel Garcia Marquez </p>
        <p>Nobel de Literatura</p>
    </div>

<?php } ?>
</body>
</html>
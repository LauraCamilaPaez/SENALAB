<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/sena.png">
	<title>Registro Usuarios</title>
    <link rel="stylesheet" href="assets/all/css/style.css">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="title">
      Formulario de Registro
    </div>
    <form class="form" action="?c=Admin&m=store" method="post">
       <div class="inputfield">
          <label>Nombres</label>
          <input type="text" name="nombre" class="input">
       </div>  
        <div class="inputfield">
          <label>Apellidos</label>
          <input type="text" class="input" name="apellido">
       </div>  
       <div class="inputfield">
        <label>Tipo de Documento</label>
        <div class="custom_select">
          <select name="tipo_documento">
            <option value="">Seleccionar Tipo de Documento</option>
            <option value="">Cédula de Ciudadanía</option>
            <option value="">Cédula de Extranjería</option>
          </select>
        </div>
     </div> 

       <div class="inputfield">
          <label>Número Documento</label>
          <input type="number" class="input" name="documento">
       </div>  
      <div class="inputfield">
          <label>Correo Misena</label>
          <input type="text" class="input" name="correo">
       </div> 
      <div class="inputfield">
          <label>Contraseña</label>
          <input type="text" name="pass" class="input">
       </div> 
        <div class="inputfield">
          <label>Cargo</label>
          <div class="custom_select">
            <select name="rol">
              <option value="">Seleccionar Cargo</option>
              <option value="male">Instructor</option>
              <option value="female">Administrador</option>
            </select>
          </div>
       </div>  


      <div class="inputfield">
        <input type="submit" value="Registrar" class="btn">
        </form>
    </div>
</div>	
	
</body>
</html>
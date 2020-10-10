<!-- <!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="assets/img/sena.png">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="assets/all/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<!-- <img class="wave" src="img/wave.png"> -->
	<!-- <div class="container-login">
		<div class="img">
			<img src="assets/img/bogota.png">
		</div>
		<div class="login-content">
			<form action="?m=index&c=Uusarios">
				<img src="assets/img/sena.png">
				<h2 class="title">Bienvenido</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Correo</h5>
           		   		<input type="text" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Contrase&ntilde;a</h5>
           		    	<input type="password" class="input">
            	   </div>
            	</div>
                <a href="?m=index&c=Usuarios">&iquest;Olvid&oacute; su contrase&ntilde;a?</a>
                <a href="?m=index&c=Admin" type="submit" class="btn" value="Login"><center>Login</center></a> -->
                <!-- <input type="submit" href="?m=index&c=Usuarios" class="btn" value="Login"> -->
                
            <!-- </form>
        </div>
    </div>
    <script type="text/javascript" src="assets/all/js/main.js"></script>
</body>
</html>  -->


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<?php if(@$_REQUEST['error']){ ?>
<div class="ui stackable container mg-top-10 grid">
        <div class="row">
            <div class="four wide column"></div>
            <div class="eight wide center aligned column">
                <div class="ui red inverted segment">
                        <h2>Correo o Contraseña Incorrecta</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php if(@$_REQUEST['created']){ ?>
<div class="ui stackable container mg-top-10 grid">
        <div class="row">
            <div class="four wide column"></div>
            <div class="eight wide center aligned column">
                <div class="ui green inverted segment">
                        <h2>Usuario Creado Correctamente</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>

    <div class="ui stackable container mg-top-10 grid">
        <div class="row">
            <div class="four wide column"></div>
            <div class="eight wide center aligned column">
                <div class="ui segment">
                    <i class="user circle huge icon"></i>
                    <div class="ui divider"></div>
                    <div class="ui form">
                        <div class="field mg-top-10">
                            <form action="?c=Login&m=auth" method="post">
                                <div class="ui left icon input big mg-top-30">
                                    <i class="user icon"></i>
                                    <input type="email" name="email" placeholder="Correo" required>
                                </div>
                                <div class="ui left icon input big mg-top-30">
                                    <i class="lock icon"></i>
                                    <input type="password" name="password" placeholder="Contraseña" required>
                                </div>

                                <button  class="ui animated black fade button mg-top-30">
                                    <div class="visible content">
                                        <h3>Entrar</h3>
                                    </div>
                                    <div class="hidden content">
                                        <i class="right arrow icon"></i>
                                    </div>
                                </button>
                                
                                <h3><a href="?class=Usuarios&view=register">¿No tienes cuenta? ¡Registrate!</a></h3>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
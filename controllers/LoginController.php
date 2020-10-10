<?php

class LoginController extends Login {

    private $usuario;

    public function index(){
		require_once('views/index/login.php');
    }
    
    public function __construct(){
        try{
            $this->usuario = new Usuario();
        }catch(Exception $e){

        }
    }

    public function auth(){
        
        $email = $_POST['email'];
        $password = $_POST['password'];

        $usuario = $this->usuario->requestEmail($email, $password);
        if($email == @$usuario->correo && $password == @$usuario->password_user){
            $_SESSION['user']=$usuario;
            header('location: ?c=Admin&m=index');
        }else{
            header('location: ?class=Login&view=index&error=error');
        }
    }

    public function destroy(){
        session_destroy();
        header('location:?class=Login&view=index');
        exit;

    }
}


?>
<?php 

class AdminController extends Admin{

	public function index(){
		require_once('views/admin/index_admin.php');
    }
    
	public function create(){
		require_once('views/admin/crear.php');
	}

	public function store(){

		$fk_rol = $_POST['fk_rol'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$correo = $_POST['correo'];
		$password_user = $_POST['password_user'];
		$tipo_documento = $_POST['tipo_documento'];
		$documento = $_POST['documento'];
		parent::insertar($fk_rol,$nombre,$apellido,$correo,$password_user,$tipo_documento,$documento);
		header('location:?c=Admin&m=index');
	}


}


 ?>
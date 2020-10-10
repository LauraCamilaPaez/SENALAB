<?php 

class AdminController extends Admin{

	public function index(){
		require_once('views/admin/index_admin.php');
    }
    
	public function create(){
		require_once('views/admin/crear.php');
	}

	public function store(){

		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$correo = $_POST['correo'];
		$pass = $_POST['pass'];
		$rol = $_POST['rol'];
		$tipo_documento = $_POST['tipo_documento'];
		$documento = $_POST['documento'];
		parent::insertar($nombre,$apellido,$correo,$pass,$rol,$tipo_documento,$documento);
		header('location:?c=Admin&m=index');
	}

	public function search_ajax(){
        $nombre='%'.$_POST['dato'].'%';
        foreach (parent::searchM($nombre) as $q){
          
  
          echo $q->nombre.' |'.$q->apellido.' | '.$q->correo.' | '.$q->rol.'<br>';
        }
        
	}
	  

}


 ?>
<?php

class IncapacidadesController extends Incapacidad{

    public function index(){

        require_once('views/incapacidades/envioIncapacidades.php');
    
    }



       
    public function create(){
      

        $detino="assets/archivos/";
        
        $file_name = $_FILES['pdf']['name'];
        $file_size = $_FILES['pdf']['size'];
        $file_tmp = $_FILES['pdf']['tmp_name'];
        $file_type = $_FILES['pdf']['type'];
  

        $route_pdf="assets/archivos/".$file_name;
        move_uploaded_file($file_tmp,"assets/archivos/".basename($file_name));
        
        header("location:?c=Incapacidades&m=index");
        
        parent::insertar(
        $_POST['correo'],
        $_POST['descripcion'],
        $route_pdf
        
        );
      
    }



}



?>
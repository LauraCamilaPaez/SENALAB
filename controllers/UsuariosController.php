<?php

class UsuariosController{

    public function index(){
        require_once('views/usuarios/index_usuarios.php');
    }
    
    public function search_ajax(){
        $nombre='%'.$_POST['dato'].'%';
        foreach (parent::searchM($nombre) as $q){
          
  
          echo $q->nombres.' |'.$q->apellidos.' | '.$q->correo.' | '.$q->direccion.'<br>';
        }
        
      }

}

?>
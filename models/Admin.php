<?php

class Admin extends DB{

    public function consultar(){
        try{
            $stm=parent::connect()->prepare("SELECT id_usuario, nombre, apellido, correo, pass, rol, tipo_documento, documento");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function insertar($nombre, $apellido, $correo, $pass, $rol, $tipo_documento, $documento){
        try{
            $stm = parent::connect()->prepare("INSERT INTO usuario(nombre,apellido,correo,pass,rol,tipo_documento,documento) VALUES ('$nombre', '$apellido', '$correo', '$pass', '$rol', '$tipo_documento', '$documento') ");
            $stm->execute();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}

?>
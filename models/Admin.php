<?php

class Admin extends DB{

    public function consultar(){
        try{
            $stm=parent::connect()->prepare("SELECT id_usuario, fk_rol, nombre, apellido, correo, password_user , tipo_documento, documento");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function insertar($fk_rol, $nombre, $apellido, $correo, $password_user,  $tipo_documento, $documento){
        try{
            $stm = parent::connect()->prepare("INSERT INTO usuario(fk_rol ,nombre,apellido,correo,password_user,tipo_documento,documento) VALUES ('$fk_rol', '$nombre', '$apellido', '$correo', '$password_user',  '$tipo_documento', '$documento') ");
            $stm->execute();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function destroyDato($UsuarioID){
        try{
          $stm=parent::connect()->prepare("DELETE FROM usuario WHERE id_usuario = ?");
          $stm->bindParam(1,$UsuarioID,PDO::PARAM_INT);
          $stm->execute();
        }catch(Exception $e){
           die($e->getMessage());
        }
    }

    public function actualizar($fk_rol,$nombre,$apellido,$correo,$password_user,$tipo_documento,$documento, $id){
        try{
            $stm = parent::connect()->prepare("UPDATE usuario SET fk_rol='$fk_rol', nombre='$nombre', apellido='$apellido', correo='$correo', password_user='$password_user', tipo_documento='$tipo_documento', documento='$documento'  WHERE id_usuario=$id");
            $stm->execute();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function requestEmail($email, $password){
        try{
            $stm = parent::connect()->prepare('SELECT * FROM usuario WHERE correo = ? AND password_user = ? ');
            $stm->bindParam(1,$email,PDO::PARAM_STR);
            $stm->bindParam(2,$password,PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die("error".$e->getMessage());
        }
    }
    public function consultarRol(){
        try{
            $stm = parent::connect()->prepare("SELECT * FROM rol");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function consultraId($id){
        try{
            $stm = parent::connect()->prepare('SELECT * FROM usuario  WHERE id_usuario = $id');
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

}

?>
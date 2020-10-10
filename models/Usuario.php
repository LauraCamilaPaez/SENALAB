<?php

class Usuario extends DB{

    // public function stored($nombres, $apellidos, $correo, $password, $tipo_documento){
    //     try{
    //         $str = parent::connect()->prepare("INSERT INTO usuario(nombre,apellido,correo,pass, tipo_documento) VALUES ('$nombres', '$apellidos', '$correo', '$password', '$tipo_documento') ");
    //         $str->execute();
    //     }catch(Exception $e){
    //         die("error".$e->getMessage());
    //     }
    // }

    public function requestEmail($email, $password){
        try{
            $str = parent::connect()->prepare('SELECT * FROM usuario WHERE correo = ? AND password_user = ? ');
            $str->bindParam(1,$email,PDO::PARAM_STR);
            $str->bindParam(2,$password,PDO::PARAM_STR);
            $str->execute();
            return $str->fetch(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die("error".$e->getMessage());
        }
    }

    public function consultarId($id){
        try{
            $q=parent::connect()->prepare("SELECT * FROM usuario WHERE id_usuario = $id");
            $q->execute();
            return $q->fetch(PDO::FETCH_OBJ);
          }catch(Exception $e){
             die($e->getMessage());
          }
    }

}



?>
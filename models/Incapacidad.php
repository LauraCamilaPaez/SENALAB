<?php 

    class Incapacidad extends DB{
        
      public function store($Correo,$Descripcion,$Pdf){
        try{
          $q=parent::connect()->prepare("INSERT INTO incapacidaes (correo,descripcion,pdf)VALUES(?,?,?)");
          $q->bindParam(1,$Correo,PDO::PARAM_STR);
          $q->bindParam(2,$Descripcion, PDO::PARAM_STR);
          $q->bindParam(3,$Pdf,PDO::PARAM_STR);
          $q->execute();
        }catch(Exception $e){
           die($e->getMessage());
        }
    }
  }
?>
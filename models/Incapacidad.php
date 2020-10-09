<?php 

    class Incapacidad extends DB{
        

        public function store($correo,$descripcion,$pdf){
            try{
              $q=parent::connect()->prepare("INSERT INTO incapacidades (correo,descripcion,pdf)VALUES(?,?,?)");
              $q->bindParam(1,$correo,PDO::PARAM_STR);
              $q->bindParam(2,$descripcion, PDO::PARAM_STR);
              $q->bindParam(3,$pdf,PDO::PARAM_STR);

              $q->execute();
            }catch(Exception $e){
               die($e->getMessage());
            }
        }
 




    }



?>
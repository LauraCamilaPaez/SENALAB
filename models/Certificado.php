<?php

class Certificado extends DB{

    public function request(){
		try{
			$stm=parent::connect()->prepare("SELECT * FROM usuario");
			$stm->execute();
			return $stm->fetchALL(PDO::FETCH_OBJ);
		}catch(Exception $e){
			die($e->getMessage());
		}
	}

}

?>
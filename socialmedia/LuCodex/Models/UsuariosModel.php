<?php  
	
	namespace LuCodex\Models;

	class UsuariosModel{

		public static function emailExists($email){
			$pdo = \LuCodex\Mysql::connect();
			$verificar = $pdo->prepare("SELECT email FROM usuarios WHERE email = ?");
			$verificar->execute(array($email));

			if($verificar->rowCount()== 1 ){
				//Email existe.
				return true;
			}else{
				return false;
			}
		}
			

	}



?>
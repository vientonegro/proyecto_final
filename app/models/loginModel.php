<?php defined('BASEPATH') or exit ('No se permite acceso directo');

// class login extends Model 
// {

// 	public function get_log($usuarioL,$contraL)
//     {
    	
// 		$connect = Model::getInstanceDB();
// 		$sql = "SELECT * FROM usuarios where usuario= :usuario and psw= :psw";
// 		$stmt = $connect->prepare($sql);
// 		$stmt->bindParam(':usuario', $usuarioL);
// 		$stmt->bindParam(':psw', $contraL);
// 		$stmt->execute();
// 		$rows = $stmt->rowCount();


// 		if ($rows > 0)
// 		 {
		
// 			$_SESSION['usuario'] = $usuarioL;
// 			return 'Login correcto';

// 		}
// 		else 
// 		{
// 			return 'Login incorrecto';
// 		} 
	
// 	}

// }

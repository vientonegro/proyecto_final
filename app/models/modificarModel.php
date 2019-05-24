<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class modificar extends Model 
{
		private $usuario;
		private $email;
		private $password;


	public function modificarRegistro($email,$password)
    {

		$connect = Model::getInstanceDB();

		$us = $_SESSION['usuario'];

		$sql = " update usuarios set email = :email, password = :password where usuario = '$us' ";
		$stmt = $connect->prepare($sql);		
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':password', $password);

		if(!$stmt->execute()) {

			return "Ha habido un error con la actualización de los datos de usuario...";
			

		} else {

			return "Datos actualizados correctamente..." ;

		}
    }
    		
}
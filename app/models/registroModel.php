<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class registro extends Model 
{

	public function insertRegistro($usuario,$email,$password,$nombre,$apellidos,$movil)
    {

		$id = null;

		$connect = Model::getInstanceDB();
		//Gestión de la inserción del dato
		//usuario y psw despues de usuarios es como la tabla los otros de :usuario lo elijo yo
		$sql = "INSERT INTO usuarios (`usuario`, `email`, `password`, `nombre`, `apellidos`, `movil`) VALUES (:usuario, :email, :password, :nombre, :apellidos, :movil)";
		$stmt = $connect->prepare($sql);
		$stmt->bindParam(':usuario', $usuario);		
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':password', $password);
		$stmt->bindParam(':nombre', $nombre);		
		$stmt->bindParam(':apellidos', $apellidos);
		$stmt->bindParam(':movil', $movil);

		//si se ejecuta correctamente el INSERT, retorno al controlador el mensaje de OK
		if(!$stmt->execute()) {

			return 'Registo incorrecto';

		} else {

			return 'Registo correcto';

		}
    }

}

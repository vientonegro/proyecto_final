<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class registro extends Model 
{

	public function insertRegistro($usuarioR,$contraR)
    {

		$id = null;

		$connect = Model::getInstanceDB();
		//Gestión de la inserción del dato
		//usuario y psw despues de usuarios es como la tabla los otros de :usuario lo elijo yo
		$sql = "INSERT INTO usuarios (`usuario`, `psw`) VALUES (:usuario, :psw)";
		$stmt = $connect->prepare($sql);
		$stmt->bindParam(':usuario', $usuarioR);
		$stmt->bindParam(':psw', $contraR);

		//si se ejecuta correctamente el INSERT, retorno al controlador el mensaje de OK
		if(!$stmt->execute()) {

			return 'Registo incorrecto';

		} else {

			return 'Registo correcto';

		}
    }

}

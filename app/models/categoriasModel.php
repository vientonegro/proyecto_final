<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class categorias extends Model 
{
		// private $id;
		// private $titulo;
		// private $imagen;
		// private $descripcion;
		// static $table = "juegos";

		// static public function get_recent($pos)
		// {
		// 	$db = Model::getInstanceDB();
		// 	$stmt = $db->prepare("SELECT * from ".self::$table." ORDER BY `id` DESC LIMIT $pos, 4");
		// 	$stmt->execute();
		// 	$games = $stmt->fetchAll(PDO::FETCH_ASSOC);

		// 	for($i=0; $i<count($games); $i++)
		// 	{
		// 		$games[$i]["descripcion"] = utf8_encode(self::getSubString($games[$i]["descripcion"]));
		// 	}
			
		// 	return $games;
		// }

		// static public function getById($id)
		// {
		// 	$db = Model::getInstanceDB();
		// 	$stmt = $db->prepare("SELECT * from ".self::$table." WHERE id=$id");
		// 	$stmt->execute();
		// 	$game = $stmt->fetch(PDO::FETCH_ASSOC);
		// 	$game["descripcion"] = utf8_encode($game["descripcion"]);
		// 	return $game;
		// }

		// public function getSubString($string)
		// {
		//     $length = 150;
		//     $stringDisplay = substr(strip_tags($string), 0, $length);
		//     if (strlen(strip_tags($string)) > $length)
		//         $stringDisplay .= ' ...';
		//     return $stringDisplay;
		// }
}

<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class producto extends Model
{
	private $idproductos;
	private $categoria;
	private $titulo;
	private $imagen;
	private $descripcion;
	private $precio;
	private $usuarios_usuario;
	static $table = "productos";

		static public function get_recent($pos)
		{
			$connect = Model::getInstanceDB();
			$sql = ("SELECT * from ".self::$table." ORDER BY `categoria` DESC LIMIT 4,4");			
			$stmt = $connect->prepare($sql);
			$stmt->execute();
			$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

			for($i=0; $i<count($productos); $i++)
			{
				$productos[$i]["descripcion"] = utf8_encode(self::getSubString($productos[$i]["descripcion"]));
			}
			
			return $productos;
		}
			// vista joyeria
		// static public function get_recentj($pos)
		// {
		// 	$connect = Model::getInstanceDB();
		// 	$sql = ("SELECT * from ".self::$table." where categoria =1 ORDER BY `idproductos` DESC LIMIT 4,4");		
		// 	$stmt = $connect->prepare($sql);
		// 	$stmt->execute();
		// 	$joyeria = $stmt->fetchAll(PDO::FETCH_ASSOC);

		// 	for($i=0; $i<count($joyeria); $i++)
		// 	{
		// 		$joyeria[$i]["descripcion"] = utf8_encode(self::getSubString($joyeria[$i]["descripcion"]));
		// 	}
			
		// 	return $joyeria;
		// }




		static public function getById($idproductos)
		{
			$connect = Model::getInstanceDB();
			$stmt = $connect->prepare("SELECT * from ".self::$table." WHERE idproductos=$idproductos");
			$stmt->execute();
			$producto = $stmt->fetch(PDO::FETCH_ASSOC);
			$producto["descripcion"] = utf8_encode($producto["descripcion"]);

			return $producto;
		}	
		public function getSubString($string)
		{
		    $length = 400;
		    $stringDisplay = substr(strip_tags($string), 0, $length);
		    if (strlen(strip_tags($string)) > $length)
		        $stringDisplay .= ' ...';
		    return $stringDisplay;
		}


}
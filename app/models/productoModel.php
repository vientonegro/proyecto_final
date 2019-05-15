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

		static public function get_recent($pos,$cat=null)
		{	
			$connect = Model::getInstanceDB();
			$filtro = "";
			if($cat)
			{
				$filtro = " where categoria = $cat";
			}
			$sql = ("SELECT * from ".self::$table." " .$filtro. " ORDER BY `idproductos` LIMIT $pos, 3");			
			$stmt = $connect->prepare($sql);
			$stmt->execute();
			$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

			for($i=0; $i<count($productos); $i++)
			{
				$productos[$i]["descripcion"] = utf8_encode(self::getSubString($productos[$i]["descripcion"]));
			}
			
			return $productos;
		}

		// public function ordernar($ord)
		// {
		// 	$connect = Model::getInstanceDB();
		// 	if($ord ==1)
		// 	{
		// 		$sql = ("SELECT * from ".self::$table. " where categoria ORDER BY `idproductos` DESC LIMIT $pos, 6");
		// 	}if else ($ord ==2)
		// 	{
		// 		$sql = ("SELECT * from ".self::$table." " .$filtro. " where categoria ORDER BY `idproductos`  LIMIT $pos, 6");
		// 	}if else ($ord ==3)
		// 	{
		// 		$sql = ("SELECT * from ".self::$table." " .$filtro. " ORDER BY `usuarios_usuario`  LIMIT $pos, 6");
		// 	}
		// 	if else ($ord ==4)
		// 	{
		// 		$sql = ("SELECT * from ".self::$table." " .$filtro. " ORDER BY `precio` LIMIT $pos, 6");
		// 	}
		// 	if else ($ord ==5)
		// 	{
		// 		$sql = ("SELECT * from ".self::$table." " .$filtro. " ORDER BY `precio` DESC LIMIT $pos, 6");
		// 	}
					
		// 	$stmt = $connect->prepare($sql);
		// 	$stmt->execute();
		// 	$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

		// 	for($i=0; $i<count($productos); $i++)
		// 	{
		// 		$productos[$i]["descripcion"] = utf8_encode(self::getSubString($productos[$i]["descripcion"]));
		// 	}
			
		// 	return $productos;

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
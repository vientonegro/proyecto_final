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

		static public function get_recent($pos, $cat=null,$order=null)
		{	
			$connect = Model::getInstanceDB();
			$filtro = "";
			if($cat)
			{
				$filtro = " where categoria = $cat";
			}
			switch($order)
			{
				case 1:

				$orderBY = "`idproductos` asc" ;
				break;

				case 2:

				$orderBY = "`usuarios_usuario` asc" ;
				break;

				case 3:

				$orderBY = "`usuarios_usuario` asc" ;
				break;

				case 4:

				$orderBY = "`precio` asc" ;
				break;

				case 5:

				$orderBY = "`precio` desc" ;
				break;

				default:

				$orderBY = "`idproductos` DESC" ;
			}
			$sql = (" SELECT * from " .self::$table. " " .$filtro. "  ORDER BY ".$orderBY."  LIMIT $pos, 3");	
			// var_dump($sql);		
			$stmt = $connect->prepare($sql);
			$stmt->execute();
			$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

			for($i=0; $i<count($productos); $i++)
			{
				$productos[$i]["descripcion"] = utf8_encode(self::getSubString($productos[$i]["descripcion"]));
			}
			
			return $productos;
		}


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
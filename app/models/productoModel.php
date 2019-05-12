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
			$sql = ("SELECT * from ".self::$table." " .$filtro. " ORDER BY `idproductos` LIMIT $pos, 6");			
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

		// Insertar productos

	public function getInsert($categoria,$titulo,$imagen,$descripcion,$precio,$usuarios_usuario)
    {

		$idproductos = null;

		$connect = Model::getInstanceDB();
		//Gestión de la inserción del dato
		
		$sql = "INSERT INTO usuarios (`categoria`, `titulo`, `imagen`,`descripcion`, `precio`, `usuarios_usuario`) VALUES (:categoria, :titulo, :imagen, :descripcion, :precio, :usuarios_usuario)";
		$stmt = $connect->prepare($sql);
		$stmt->bindParam(':categoria', $categoria);		
		$stmt->bindParam(':titulo', $titulo);
		$stmt->bindParam(':imagen', $imagen);
		$stmt->bindParam(':descripcion', $descripcion);		
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':usuarios_usuario', $usuarios_usuario);

		//si se ejecuta correctamente el INSERT, retorno al controlador el mensaje de OK
		if(!$stmt->execute()) {

			return 'Insert incorrecto';

		} else {

			return 'Insert correcto';

		}
    }		


}
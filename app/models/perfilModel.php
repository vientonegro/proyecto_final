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
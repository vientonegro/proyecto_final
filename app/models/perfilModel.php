<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class perfil extends Model
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

	public function getsubir($categoria,$titulo,$imagen,$descripcion,$precio,$usuarios_usuario)
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
	public function insertImage($file, $imageName, $maxImageSize, $UrlFileServer, $usuarios_usuario) 
	{

		$fileTmpPath = $file['tmp_name'];
	    $fileName = $file['name'];
	    $fileSize = $file['size'];
	    $fileType = $file['type'];
	    $fileNameCmps = explode(".", $fileName);
	    $fileExtension = strtolower(end($fileNameCmps));
	    $newFileName = $imageName . '.' . $fileExtension;
	    $allowedfileExtensions = array('jpg', 'jpeg', 'gif', 'png');
	    $imageDbURL = $UrlFileServer . '/' . $usuarios_usuario . '/' . $newFileName;

	    if($fileSize > $maxImageSize) {

	        return array('El tamaño de la imagen excede de 2MB. No se ha insertado la imagen...', false);

	    } else if(!in_array($fileExtension, $allowedfileExtensions)) {

	        return array('La extensión de la imagen tiene que ser de este tipo: (jpg, jpeg, gif, png). No se ha insertado la imagen...', false);

	    }
	     else 
	    {

	        $dirPath = realpath(dirname(getcwd()));
	        $dirPath = $dirPath . '/' . $UrlFileServer . '/' . $usuarios_usuario;
	        if(!is_dir($dirPath)) mkdir($dirPath, 0755, true);
	        $destPath = $dirPath . '/' . $newFileName;
	        $files = glob($dirPath . '/*'); 
	        foreach($files as $file)
	        {
	            if(is_file($file))
	            {
	            	unlink($file);
	            }
	             
	        }

	        if(move_uploaded_file($fileTmpPath, $destPath)) 
	        {

	            return array('Imagen insertada correctamente...', true, $newFileName);

	        } 
	        else 
	        {

	            return array('Ha ocurrido un problema con la carga de la imagen. Inténtalo más tarde...', false);

	        }

	    }

	}
}
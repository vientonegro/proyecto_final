<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class modificar extends Model 
{
		private $usuario;
		private $email;
		private $password;

		public function __construct()
		{
			$total_args = func_num_args();
			$argumentos = func_get_args();

			switch ($total_args) 
			{
				case 2:
					$this->usuario = $argumentos[0];
					$this->password = $argumentos[1];
					break;
				case 3:
					$this->usuario = $argumentos[0];
					$this->email = $argumentos[1];
					$this->password = $argumentos[2];								
					break;

			}
		}

	public function insertRegistro($usuario,$email,$password)
    {

		$id = null;

		$connect = Model::getInstanceDB();
		//Gestión de la inserción del dato
		//usuario y psw despues de usuarios es como la tabla los otros de :usuario lo elijo yo
		$sql = "INSERT INTO usuarios (`usuario`, `email`, `password`) VALUES (:usuario, :email, :password)";
		$stmt = $connect->prepare($sql);
		$stmt->bindParam(':usuario', $usuario);		
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':password', $password);

		//si se ejecuta correctamente el INSERT, retorno al controlador el mensaje de OK
		if(!$stmt->execute()) {

			return 'Registo incorrecto';

		} else {

			return 'Registo correcto';

		}
    }
	public function get_log($usuario,$password)
    {
    	
		$connect = Model::getInstanceDB();
		$sql = "SELECT * FROM usuarios where usuario= :usuario and password= :password";
		$stmt = $connect->prepare($sql);
		$stmt->bindParam(':usuario', $usuario);
		$stmt->bindParam(':password', $password);
		$stmt->execute();
		$rows = $stmt->rowCount();


		if ($rows > 0)
		 {
		
			$_SESSION['usuario'] = $usuario;
			return 'Login correcto';

		}
		else 
		{
			return 'Login incorrecto';
		} 
	
	}    		
}
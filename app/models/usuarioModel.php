<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class usuario extends Model 
{
		private $usuario;
		private $email;
		private $password;
		private $nombre;
		private $apellidos;
		private $movil;

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
				case 4:
					$this->usuario = $argumentos[0];
					$this->email = $argumentos[1];
					$this->password = $argumentos[2];
					$this->nombre = $argumentos[3];
					$this->apellidos = $argumentos[4];	
					$this->movil = $argumentos[5];									
					break;

			}
		}
}
<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class registroController extends Controller 
{

    public function index() 
    {

        $this->render('index');

    }
   
    public function usuario()
	{

		if(isset($_POST["usuarioR"]) && isset($_POST["emailR"]) && isset($_POST["contraR"]))
		{

			$regUsu = Security::secure_input($_POST["usuarioR"]);
			$regEm = Security::secure_input($_POST["emailR"]);
			$regCon = Security::secure_input($_POST["contraR"]);

			require_once(ROOT . DS .'app' .DS . 'models' . DS . 'usuarioModel.php');
      
			$insertar = new usuario();

			$d= $insertar->insertRegistro($regUsu,$regEm,$regCon);


			echo json_encode($d);
		}
		else
		{
			//Si quiere entrar directo sin POST salta el 404

			header('Location: ' . BASE_DOMAIN_DIR_URL . 'webroot/404.php');
		}

	}
}	
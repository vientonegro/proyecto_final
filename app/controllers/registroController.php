<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class registroController extends Controller 
{

    public function index() 
    {

        $this->render('index');

    }
    public function registro()
	{

		if(isset($_POST["usuarioR"]) && isset($_POST["contraR"]))
		{

			$regUsu = Security::secure_input($_POST["usuarioR"]);
			$regCon = Security::secure_input($_POST["contraR"]);

			require_once(ROOT . DS .'app' .DS . 'models' . DS . 'registroModel.php');
      
			$insertar = new registro();

			$d= $insertar->insertRegistro($regUsu,$regCon);


			echo json_encode($d);
		}
		else
		{
			//Si quiere entrar directo sin POST salta el 404

			header('Location: ' . BASE_DOMAIN_DIR_URL . 'webroot/404.php');
		}

	}
}	
<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class loginController extends Controller {

    public function index() {

        $this->render('index');

    }
    public function usuario()
	{
		if(isset($_POST["usuarioL"]) && isset($_POST["contraL"]))
		{

			$logUsu = Security::secure_input($_POST["usuarioL"]);
			$logCon = Security::secure_input($_POST["contraL"]);
			$logCon = Security::en_de_cryptIt($logCon,'en');



			require_once(ROOT . DS .'app' .DS . 'models' . DS . 'usuarioModel.php');

			$insertar = new usuario();
			$d= $insertar->get_log($logUsu,$logCon);
			echo json_encode($d);
					
		}
		else
		{
			//Si quiere entrar directo sin POST salta el 404
			echo json_encode("Error");

			//header('Location: ' . BASE_DOMAIN_DIR_URL . 'webroot/404.php');
		}
	}
	public function salir()
	{

	unset($_SESSION["usuario"]);	
	session_destroy();
	header('Location: ' . BASE_DOMAIN_DIR_URL . 'home/index');
	}

}

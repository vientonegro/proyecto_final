<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class loginController extends Controller {

    public function index() {

        $this->render('index');

    }
    public function login()
	{
		if(isset($_POST["usuarioL"]) && isset($_POST["contraL"]))
		{

			$logUsu = Security::secure_input($_POST["usuarioL"]);
			$logCon = Security::secure_input($_POST["contraL"]);

			require_once(ROOT . DS .'app' .DS . 'models' . DS . 'loginModel.php');

			$insertar = new login();
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
	session_start();
	unset($_SESSION["user_data"]);	
	session_destroy();
	header('Location: ' . BASE_DOMAIN_DIR_URL . 'home/index');
	}

}

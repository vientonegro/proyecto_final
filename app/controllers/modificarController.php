<?php defined('BASEPATH') or exit ('No se permite acceso directo');
require_once(ROOT . DS .'app' .DS . 'models' . DS . 'modificarModel.php');
class modificarController extends Controller 
{

    public function index() 
    {

        $this->render('index');

    }
   
    public function modi()
	{

		if(isset($_POST["emailM"]) && isset($_POST["contraM"]))
		{


			$modEm = Security::secure_input($_POST["emailM"]);
			$modCon = Security::secure_input($_POST["contraM"]);
      
			$insertar = new modificar();

			$d= $insertar->modificarRegistro($modEm,$modCon);


			echo json_encode($d);
		}
		else
		{
			//Si quiere entrar directo sin POST salta el 404

			header('Location: ' . BASE_DOMAIN_DIR_URL . 'webroot/404.php');
		}

	}
}	
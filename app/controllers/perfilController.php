<?php defined('BASEPATH') or exit ('No se permite acceso directo');

require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'productoModel.php'); 

class perfilController extends Controller 
{
    public function index()
    {   
        $this->render('index');
    }

    public function insert()
    {
        // var_dump($_FILES);
        if(isset($_POST["categoria"]) && isset($_POST["titulo"]) && isset($_POST["descripcion"]) && isset($_POST["precio"]) && isset($_POST["usuario"]) 
            )
        {

            $categoria = Security::secure_input($_POST["categoria"]);
            $titulo = Security::secure_input($_POST["titulo"]);
            $descripcion = Security::secure_input($_POST["descripcion"]);
            $precio = Security::secure_input($_POST["precio"]);           
            $usuario = Security::secure_input($_POST["usuario"]);


            $insertar = new perfil();

            $d['mensaje']= $insertar->getsubir($categoria,$titulo,$descripcion,$precio,$usuario);

            $this->set($d['mensaje']);
            $this->render('index');

        }
        else
        {
            //Si quiere entrar directo sin POST salta el 404

            header('Location: ' . BASE_DOMAIN_DIR_URL . 'webroot/404.php');
        }

    }


}
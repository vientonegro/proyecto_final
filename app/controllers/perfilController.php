<?php defined('BASEPATH') or exit ('No se permite acceso directo');

require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'productoModel.php'); 

class perfilController extends Controller 
{
    public function index()
    {   

        $d['script'] = "index";
        // $d['title'] = "Prueba";
        $this->set($d);
        $this->render('index');
    }

    public function insert()
    {

        if(isset($_POST["categoria"]) && isset($_POST["titulo"]) && isset($_POST["descripcion"]) && isset($_POST["precio"]) && isset($_POST["usuario"]))
        {

            $categoria = Security::secure_input($_POST["categoria"]);
            $titulo = Security::secure_input($_POST["titulo"]);
            $descripcion = Security::secure_input($_POST["descripcion"]);
            $precio = Security::secure_input($_POST["precio"]);
            // $imagen = Security::secure_input($_POST["imagen"]);
            $usuario = Security::secure_input($_POST["usuario"]);
      
            $insertar = new perfil();

            $d['mensaje']= $insertar->getInsert($categoria,$titulo,$descripcion,$precio,$imagen,$usuario);

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
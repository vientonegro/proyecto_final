<?php defined('BASEPATH') or exit ('No se permite acceso directo');

require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'perfilModel.php'); 

class perfilController extends Controller 
{
    public function index()
    {   
        $this->render('index');
    }

    public function insert()
    {
        // var_dump($_POST);
        // exit;
        if(isset($_POST["categoria"]) && isset($_POST["titulo"]) && isset($_POST["descripcion"]) && isset($_POST["precio"]) && isset($_POST["usuario"]))
        {
            //Subir imagen
            $directorio = getcwd().'/img/';
            $foto_nueva = date('Ymd_His').'_'.$_FILES['user-img-file']['name'];
            $result = move_uploaded_file($_FILES["user-img-file"]["tmp_name"], $directorio.$foto_nueva);

            //coger datos formulario
            $categoria = Security::secure_input($_POST["categoria"]);
            $titulo = Security::secure_input($_POST["titulo"]);
            $descripcion = Security::secure_input($_POST["descripcion"]);
            $precio = Security::secure_input($_POST["precio"]);           
            $usuario = Security::secure_input($_POST["usuario"]);
            $imagen = $foto_nueva;

            //insertar
            $insertar = new perfil();

            $d['mensaje']= $insertar->getsubir($categoria,$titulo,$imagen,$descripcion,$precio,$usuario);

            $this->set($d);
            $this->render('index');

        }
        else
        {
            //Si quiere entrar directo sin POST salta el 404

            header('Location: ' . BASE_DOMAIN_DIR_URL . 'webroot/404.php');
        }

    }


}
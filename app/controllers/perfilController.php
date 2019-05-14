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
        var_dump(insert);
        if(isset($_POST["categoria"]) && isset($_POST["titulo"]) && isset($_POST["descripcion"]) && isset($_POST["precio"]) && isset($_POST["usuario"]) && isset($_FILES["user-img-file"]))
        {

            $categoria = Security::secure_input($_POST["categoria"]);
            $titulo = Security::secure_input($_POST["titulo"]);
            $descripcion = Security::secure_input($_POST["descripcion"]);
            $precio = Security::secure_input($_POST["precio"]);           
            $usuario = Security::secure_input($_POST["usuario"]);

            $directorio = getcwd().'BASE_DOMAIN_DIR_IMG';
            $foto_nueva = $directorio.$_FILES['user-img-file']['name'];
            $result =move_uploaded_file($_FILES["user-img-file"]["tmp_name"], $foto_nueva);
            $imagen = Security::secure_input($_FILES["user-img-file"]["name"]);

            $insertar = new perfil();

            $d['mensaje']= $insertar->getInsert($categoria,$titulo,$descripcion,$precio,$imagen,$usuario,$imagen);

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
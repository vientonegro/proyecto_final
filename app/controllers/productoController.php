<?php defined('BASEPATH') or exit ('No se permite acceso directo');

require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'productoModel.php'); 
class productoController extends Controller 
{


    //PHP VIEW
    public function index()
    {
    	$d['productos'] = $this->producto_structure(producto::get_recent(0));
    	$d['script'] = "index";
        // $d['title'] = "Prueba";
        $this->set($d);
        $this->render('index');
    }

    private function producto_structure($producto_array)
    {
    	$content = "";
    	foreach ($producto_array as $value) 
    	{
    		$content.='<a href="producto/detalle/'.$value["idproductos"].'-'.$this->clean($value["titulo"]).'">';
				$content.='<div class="card">';
					$content.='<div class="image_card" style="background-image: url('.WEBROOT.'img/'.$value['imagen'].')"></div>';
					$content.='<h2>'.$value["titulo"].'</h2>';
					$content.='<p>'.$value["descripcion"].'</p>';
				$content.='</div>';
			$content.='</a>';
    	}

    	return $content;
    }

    //AJAX
    public function recent()
    {
    	$pos = $_POST["pos"];
    	$d = $this->producto_structure(producto::get_recent($pos));
        // $j = $this->producto_structure(producto::get_recentj($pos));
  		echo json_encode($d);
        // echo json_encode($j);
    }

    public function clean($string) 
    {
	   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

	   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
	}

    // Insertar producto

    public function insert()
    {

        if(isset($_POST["categoria"]) && isset($_POST["titulo"]) && isset($_POST["descripcion"]) && isset($_POST["precio"]) && isset($_POST["imagen"]) && isset($_POST["usuario"]))
        {

            $categoria = Security::secure_input($_POST["categoria"]);
            $titulo = Security::secure_input($_POST["titulo"]);
            $descripcion = Security::secure_input($_POST["descripcion"]);
            $imagen = Security::secure_input($_POST["precio"]);
            $regEm = Security::secure_input($_POST["imagen"]);
            $regCon = Security::secure_input($_POST["usuario"]);
      
            $insertar = new producto();

            $d= $insertar->getInsert($categoria,$titulo,$descripcion,$precio,$imagen,$usuario);

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
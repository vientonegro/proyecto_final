<?php defined('BASEPATH') or exit ('No se permite acceso directo');

require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'productoModel.php'); 
class productoController extends Controller 
{

    public function index() {

        $this->render('index');

    }
    //PHP VIEW
    // public function productos()
    // {
    // 	$d['productos'] = $this->producto_structure(producto::get_recent(0));
    // 	$d['script'] = "index";
    //     $d['title'] = "Bienvenidos al patrón";
    //     $this->set($d);
    //     $this->render('productos');
    // }

    private function producto_structure($producto_array)
    {
    	$content = "";
    	foreach ($producto_array as $value) 
    	{
    		// $content.='<a href="producto/detalle/'.$value["id"].'-'.$this->clean($value["titulo"]).'">';
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
  		echo json_encode($d);
    }

    public function clean($string) 
    {
	   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

	   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
	}


}
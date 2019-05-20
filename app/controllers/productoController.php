<?php defined('BASEPATH') or exit ('No se permite acceso directo');

require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'productoModel.php'); 
class productoController extends Controller 
{


    //PHP VIEW
    public function index($cat=0)
    {   
        $segments = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
        // cogemos el tercer fragmento
        $ord = isset($segments[3]) ? $segments[3] : '';

    	$d['productos'] = $this->producto_structure(producto::get_recent(0,$cat,$ord));
    	$d['script'] = "index";
        // $d['title'] = $d["titulo"];
        $d['cat'] = $cat;

        $this->set($d);
        $this->render('index');
    }
    public function joyeria()
    {   
         $this->index(1);
    }
        public function artesania()
    {   
         $this->index(2);
    }
        public function pintura()
    {   
         $this->index(3);
    }
    //crear variable tipo if para el data vaya variando

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
                    $content.='<p>'."Precio: ".$value["precio"]." €".'</p>';
				$content.='</div>';
			$content.='</a>';
    	}

    	return $content;
    }

    //AJAX
    public function recent()
    {
    	$pos = $_POST["pos"];
        $cat = $_POST["cat"];
        
    	$d = $this->producto_structure(producto::get_recent($pos,$cat));
        
  		echo json_encode($d);
     
    }

    public function clean($string) 
    {
	   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

	   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
	}

    public function detalle($idproductos)
    {   

        $id = explode("-", $idproductos)[0];
        $dextra['producto'] = producto::getById($id);
        $dextra['script'] = "detalle";
        $dextra['title'] = $dextra['producto']['titulo'];
        $this->set($dextra);
        $this->render('detalle');
       
    }

    public function ordenar()
    {
        $type = $_POST["type"];
        $cat = $_POST["cat"];
        $productos = $this->producto_structure(producto::get_recent(0,$cat,$type));
        echo json_encode($productos);
    }


}
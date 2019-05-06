<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class categoriasController extends Controller {

    public function index() {

        $this->render('index');

    }
 // public function index()
 //    {
    	
 //    	$d['games'] = $this->game_structure(categorias::get_recent(0));
 //    	$d['script'] = "home";
 //        $d['title'] = "Bienvenidos al patrón";
 //        $this->set($d);
 //        $this->render('index');
 //    }

 //    private function game_structure($games_array)
 //    {
 //    	$content = "";
 //    	foreach ($games_array as $value) 
 //    	{
 //    		$content.='<a href="game/detalle/'.$value["id"].'-'.$this->clean($value["titulo"]).'">';
	// 			$content.='<div class="card">';
	// 				$content.='<div class="image_card" style="background-image: url('.WEBROOT.'img/'.$value['imagen'].')"></div>';
	// 				$content.='<h2>'.$value["titulo"].'</h2>';
	// 				$content.='<p>'.$value["descripcion"].'</p>';
	// 			$content.='</div>';
	// 		$content.='</a>';
 //    	}

 //    	return $content;
 //    }

 //    //AJAX
 //    public function recent()
 //    {
 //    	$pos = $_POST["pos"];
 //    	$d = $this->game_structure(categorias::get_recent($pos));
 //  		echo json_encode($d);
 //    }

 //    public function clean($string) 
 //    {
	//    $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

	//    return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
	// }


}
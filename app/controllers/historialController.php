<?php defined('BASEPATH') or exit ('No se permite acceso directo');

require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'historialModel.php'); 

class historialController extends Controller 
{
    public function index()
    {   

        $d['productos'] = $this->historial_structure(historial::getHist(0));
        $d['script'] = "index";
        // $d['title'] = $d["titulo"];
        $this->set($d);
        $this->render('index');
    }

    private function historial_structure($producto_array)
    {
        $content = "";
        foreach ($producto_array as $value) 
        {
            $content.='<a href="producto/detalle/'.$value["idproductos"].'-'.$this->clean($value["titulo"]).'">';
                $content.='<div class="card">';
                    $content.='<div class="image_card" style="background-image: url('.WEBROOT.'img/'.$value['imagen'].')"></div>';
                    $content.='<h2>'.$value["titulo"].'</h2>';
                    $content.='<p>'."Artista: ".$value["usuarios_usuario"].'</p>';
                    $content.='<p>'.$value["descripcion"].'</p>';
                    $content.='<p>'."Precio: ".$value["precio"]." €".'</p>';
                $content.='</div>';
            $content.='</a>';
        }

        return $content;
    }

    public function recent()
    {
        $pos = $_POST["pos"];
        
        $d = $this->historial_structure(historial::getHist($pos));
        
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
        $dextra['producto'] = home::getById($id);
        $dextra['script'] = "detalle";
        $dextra['title'] = $dextra['producto']['titulo'];
        $this->set($dextra);
        $this->render('detalle');
       
    }    



}
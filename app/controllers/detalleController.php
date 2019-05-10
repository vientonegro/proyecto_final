<?php defined('BASEPATH') or exit ('No se permite acceso directo');
// para cuando se amplia la vista personalizada
require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'productoModel.php'); 

class detalleController extends Controller 
{
	public function detalle($d)
	{
		$id = explode("-", $d)[0];
		$dextra['producto'] = producto::getById($id);
		$dextra['script'] = "detalle";
		$dextra['title'] = $dextra['producto']['titulo'];
	    $this->set($dextra);
	    $this->render('detalle');
	}
}
<?php defined('BASEPATH') or exit ('No se permite acceso directo');

require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'searchModel.php');

class searchController extends Controller {


    public function default()
    {   

        $this->render('default');
    }

    if(isset($_POST["dato"]))
    {
            echo json_encode(search::getdat($_POST["dato"]));
    }
   

}

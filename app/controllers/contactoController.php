<?php defined('BASEPATH') or exit ('No se permite acceso directo');

require_once(ROOT . DS . 'app' . DS . 'models' . DS . 'contactoModel.php'); 

class contactoController extends Controller {

    public function index() {

        $this->render('index');

    }
    public function contactoForm() {

        // if (isset($_POST['contact-name']) && isset($_POST['contact-apellido']) && isset($_POST['contact-email']) && 
        //     isset($_POST['contact-message'])) 
        
            var_dump($_POST);
            // var_dump($_POST['contact-name']);

            // $contactForm = new contacto;
            // $d['mensaje'] = $contactForm->contactoFormEnviar();
            // $this->set($d);
            // $this->render('index');

        } 
        // else {

        //     header('Location: ' . BASE_DOMAIN_DIR_URL . 'webroot/404.php');

        // }

    }    

}

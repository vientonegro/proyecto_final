<?php defined('BASEPATH') or exit ('No se permite acceso directo');

class contacto extends Model {

	public function contactoFormEnviar() {

        $name = Security::secure_input($_POST['contact-name']);
        $apellido = Security::secure_input($_POST['contact-apellido']);
        $email = Security::secure_input($_POST['contact-email']);
        $message = Security::secure_input($_POST['contact-message']);

        ob_start(); 
        require_once(ROOT . DS . 'app' . DS . 'views' . DS . 'templates' . DS . 'emailTemplates' . DS . 'contactForm.php');
        $body = ob_get_contents(); 
        ob_end_clean();
        $subject = 'Formulario de contacto';

        if(!email('creationart8a@gmail.com', $subject, $body)){

            return '-Fallo en el servidor del correo electrónico. Inténtalo más tarde';

        } else {

            return '-Los datos se han enviado correctamente. Gracias por contactar con nosotros';

        }
       
    }
}

<?php defined('BASEPATH') or exit ('No se permite acceso directo'); 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once '../libs/PHPMailer/Exception.php';
require_once '../libs/PHPMailer/PHPMailer.php';
require_once '../libs/PHPMailer/SMTP.php';
function removeMagicQuotes() {

	if (get_magic_quotes_gpc()) {

		$_GET = stripSlashesDeep($_GET );
		$_POST = stripSlashesDeep($_POST);
		$_COOKIE = stripSlashesDeep($_COOKIE);

	}

}

/** Check register globals and remove them **/
function unregisterGlobals() {

	if (ini_get('register_globals')) {

		$array = array('_SESSION', '_POST', '_GET', '_COOKIE', '_REQUEST', '_SERVER', '_ENV', '_FILES');
		
		foreach ($array as $value) {
			foreach ($GLOBALS[$value] as $key => $var) {
				if ($var === $GLOBALS[$key]) {
					unset($GLOBALS[$key]);
				}
			}
		}
	}

}
/** Execute functions **/
removeMagicQuotes();
unregisterGlobals(); 

function email($email, $subject, $body) {

//para servidor GMAIL, quitar seguridad en la configuración de la cuenta
//https://www.google.com/settings/u/1/security/lesssecureapps

	$mail = new PHPMailer;
    $mail->isSMTP();
    $mail->IsHTML(true);
    $mail->SMTPDebug = 0;
    $mail->CharSet = 'UTF-8';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->SMTPAuth = true;
    $mail->Username = "creationart8a@gmail.com";
    $mail->Password = "telatela40034003";
    $mail->setFrom('creationart8a@gmail.com', 'Gmail');
    $mail->addAddress($email);
    $mail->Subject = $subject;
    $mail->MsgHTML($body);
    
    if($mail->send()) {return true;}
    else {return false;}

}
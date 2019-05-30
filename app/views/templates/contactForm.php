<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>

<div style="font-family: 'Montserrat', sans-serif;">
	<div style="display: flex;">
		<h3>Formulario Contacto Plantilla MVC</h3>
	</div>
	<h3 style="text-decoration: underline;">Datos recibidos del formulario de contacto:</h3>
	<p><span style="font-weight: bold;">Nombre y apellidos: </span><?php echo $name;?></p>
	<p><span style="font-weight: bold;">apellidos: </span><?php echo $apellido;?></p>
	<p><span style="font-weight: bold;">Email: </span><?php echo $email;?></p>
	<p><span style="font-weight: bold;">Mensaje: </span><?php echo $message;?></p>
</div>


<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>

		<form class="LG" method="post" action="historial/index" id="login">
			<h2 class="inse">Modificar Contraseña <?php echo $_SESSION["usuario"];?></h2>
			<input class="loRe" type="password" name="contra" id="contra" placeholder="contraseña">
			<input class="loRe" type="text" name="contraM" id="contraM" placeholder="Modificar contraseña">
			<div style="text-align: center">
				<input class="loRe" type="button" value="Cambiar" id="cambiar">
			</div>
			<div id="errorsL"></div>
		<form>
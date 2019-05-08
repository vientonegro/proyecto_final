<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>
		


		<form method="post" id="registro" action="registro/registro">
			<h3>REGISTRO</h3>
			<input type="text" name="usuarioR" id="usuarioR" placeholder="usuario">
			<input type="password" name="contraR" id="contraR" placeholder="contraseña">
			<input type="text" name="emailR" id="emailR" placeholder="email">
			<div style="text-align: center">
				<input type="button" value="Registrar" id="registrar">
			</div>
			<div id="errorsR"></div>
		</form>		
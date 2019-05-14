<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>
		


		<form class="LG" method="post" id="registro" action="registro/registro">
			<h3>REGISTRO</h3>
			<input class="loRe" type="text" name="usuarioR" id="usuarioR" placeholder="usuario">
			<input class="loRe" type="password" name="contraR" id="contraR" placeholder="contraseña">
			<input class="loRe" type="text" name="emailR" id="emailR" placeholder="email">
			<div style="text-align: center">
				<input class="loRe" type="button" value="Registrar" id="registrar">
			</div>
			<div id="errorsR"></div>
		</form>		
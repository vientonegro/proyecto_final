<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>
		


		<form method="post" id="registro" action="home/registro">
			<h3>REGISTRO</h3>
			<input type="text" name="usuarioR" id="usuarioR" placeholder="usuario">
			<input type="password" name="contraR" id="contraR" placeholder="contraseña">
			<div style="text-align: center">
				<input type="button" value="Registrar" id="registrar">
				<input type="button" value="Borrar" id="borrar">
			</div>
			<div id="errorsR"></div>
		</form>		
<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>


		<form method="post" action="login/login" id="login">
			<h3>LOGIN</h3>
			<input type="text" name="usuarioL" id="usuarioL" placeholder="usuario">
			<input type="password" name="contraL" id="contraL" placeholder="contraseña">
			<div style="text-align: center">
				<input type="button" value="Entrar" id="loginB">
				<input type="button" value="Borrarb" id="borrarb">
			</div>
			<div id="errorsL"></div>
		</form>

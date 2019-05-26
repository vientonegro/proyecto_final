<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>

		<h2 class="inser">LOGIN</h2>

		<form class="LG" method="post" action="login/login" id="login">

			<input class="loRe" type="text" name="usuarioL" id="usuarioL" placeholder="usuario">
			<input class="loRe" type="password" name="contraL" id="contraL" placeholder="contraseña">
			<div style="text-align: center">
				<input class="loRe" type="button" value="Entrar" id="loginB">
			</div>
			<div id="errorsL"></div>
		</form>

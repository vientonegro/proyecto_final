<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>

		<form class="LG" method="post" action="" id="modif_btn" name="modif_btn">
			<h2 class="inse">Modificar Contraseña <?php echo $_SESSION["usuario"];?></h2>
			<!-- <input class="loRe" type="text" name="email" id="email" placeholder="email"> -->
			<input class="loRe" type="text" name="emailM" id="emailM" placeholder="Modificar email">
			<!-- <input class="loRe" type="password" name="contra" id="contra" placeholder="contraseña"> -->
			<input class="loRe" type="password" name="contraM" id="contraM" placeholder="Modificar contraseña">
			<div style="text-align: center">
			<input class="loRe" type="button" value="Cambiar" id="cambiar">
			</div>
			<div id="errorsM"></div>
		<form>
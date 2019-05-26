<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>

		<div class="inse"><h2 ><a href="historial/index">Historial</a></h2></div>
		<div class="inse2"><h2 ><a href="perfil/index">Insertar</a></h2></div>
		<div class="clear"></div>

		<h2 class="inser">Modificar Contraseña <?php echo $_SESSION["usuario"];?></h2>
		<form class="LG" method="post" action="" id="modif_btn" name="modif_btn">

			<!-- <input class="loRe" type="text" name="email" id="email" placeholder="email"> -->
			<input class="loRe" type="text" name="emailM" id="emailM" placeholder="Modificar email">
			<!-- <input class="loRe" type="password" name="contra" id="contra" placeholder="contraseña"> -->
			<input class="loRe" type="password" name="contraM" id="contraM" placeholder="Modificar contraseña">
			<div style="text-align: center">
			<input class="loRe" type="button" value="Cambiar" id="cambiar">
			</div>
			<div id="errorsM"></div>
		<form>
<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>

		<a href="historial/index"><div class="inse"><h2 >Historial</h2></div></a>
		<a href="perfil/index"><div class="inse2"><h2 >Insertar</h2></div></a>
		<div class="clear"></div>

		<h2 class="inser">Modificar Contraseña <?php echo $_SESSION["usuario"];?></h2>
		<form class="LG" method="post" action="" id="modif_btn" name="modif_btn">
			<input class="loRe" type="text" name="emailM" id="emailM" placeholder="Modificar email">
			<input class="loRe" type="text" name="emailMo" id="emailMo" placeholder="Repetir email">
			<input class="loRe" type="password" name="contraM" id="contraM" placeholder="Modificar contraseña">
			<input class="loRe" type="password" name="contrao" id="contrao" placeholder="Repetir contraseña">
			<div style="text-align: center">
			<input class="loRe" type="button" value="Cambiar" id="cambiar">
			</div>
			<div id="errorsM"></div>
		<form>
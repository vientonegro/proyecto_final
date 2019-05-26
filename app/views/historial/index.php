<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>

	<div class="inse"><h2 ><a href="perfil/index">Insertar</a></h2></div>
	<div class="inse2"><h2 ><a href="modificar/index">Modificar Perfil</a></h2></div>
	<div class="clear"></div>

		<h2 class="inser">Historial <?php echo $_SESSION["usuario"];?></h2>

		<div class="content">
            <?php echo $productos;?>
        </div>
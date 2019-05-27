<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>

	<a href="perfil/index"><div class="inse"><h2 >Insertar</h2></div></a>
	<a href="modificar/index"><div class="inse2"><h2 >Modificar Perfil</h2></div></a>
	<div class="clear"></div>

		<h2 class="inser">Historial <?php echo $_SESSION["usuario"];?></h2>

		<div class="content">
            <?php echo $productos;?>
        </div>
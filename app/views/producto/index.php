<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>
<script type="text/javascript">
            
    var url = "<?php echo BASE_DOMAIN_DIR_URL?>";
    
</script>
<form class="ordenar" method="POST" id="ordenar" action="producto/index">
	<select class="ordenar" name="ord" id="ord">
		 <option value="0">Ordenar por:</option>
		 <option value="1">Artistas [A-Z]</option>
		 <option value="2">Artistas [Z-A]</option>
		 <option value="3">Precio más bajo</option>
		 <option value="4">Precio más alto</option>
		 <option value="5">Productos Antiguos</option>
		 <option value="6">Novedades</option>		 
	</select>
</form>

<div class="content">
	<?php echo $productos;?>
</div>
<div class="loading">
	<img src="<?php echo BASE_DOMAIN_DIR_URL;?>/webroot/img/loader.gif">
</div>
<span class="more" data-cat="<?php echo $cat;?>">Ver más</span>
<p class="nomore"></p>

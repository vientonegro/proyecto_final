<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>
<script type="text/javascript">
            
    var url = "<?php echo BASE_DOMAIN_DIR_URL?>";
    
</script>

	<select class="ordenar">
		 <option value="0">Ordenar por:</option>
		 <option value="1">Novedades</option>
		 <option value="2">Antiguos</option>
		 <option value="3">Artistas</option>
		 <option value="4">Precio más bajo</option>
		 <option value="5">Precio más alto</option>		 
	</select>


<div class="content">
	<?php echo $productos;?>
</div>
<div class="loading">
	<img src="<?php echo BASE_DOMAIN_DIR_URL;?>/webroot/img/loader.gif">
</div>
<span class="more" data-cat="1">Ver más</span>
<p class="nomore"></p>

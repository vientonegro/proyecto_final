<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>
<article class="det">
<h1 class="detUsuario"><?php echo "El artista es: ",$producto['usuarios_usuario']?></h1>
<div class = "cont"><img src=<?php echo WEBROOT.'img/'.$producto["imagen"];?>></div>
<h3 class="detTitulo"><?php echo $producto['titulo']?></h1>
<p class="contenido"><?php echo $producto["descripcion"];?></p>
<p class="contenido"><?php echo "El precio es: " .$producto["precio"]." €";?></p>
</article>
<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>



<div class="contacto">
    <form id="contacto" method="post" action="contacto.php">
     <ul>
      <li><h3 class="contacto">Contacto</h3></li>
      <!-- <li><label>Nombre:</label></li> -->
      <li><input id="nombre" name="nombre" type="text" placeholder="Nombre" onkeyup="validarNombre(event)"><div id="caja1"></li>
      <!-- <li><label>Apellido:</label></li> -->
      <li><input id="apellido" name="apellido" placeholder="Apellido" type="text" onkeyup="validarApellido(event)"><div id="caja2"></li>
      <!-- <li><label>Movil:</label></li> -->
      <li><input id="movil" name="movil" type="number" placeholder="Movil" onkeyup="validarMovil(event)"><div id="caja4"></li>
      <!-- <li><label>Mensaje:</label></li> -->
      <li><textarea rows="4" cols="50" placeholder="Introduce el mensaje"></textarea><div id="caja4"></li>  
      <input type="submit" value="Enviar" onclick="validar_todo(event)">
      <li><span id="mensaje"></span></li>
    </ul>
  </form>
</div>
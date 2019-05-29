<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>

<h1 class="tacto">Contacto</h1>
<div class="contactor">
  <form class="conta" action="contacto/contactoForm" id="contact">
    <div class="nom item">
      <label class="lab">Nombre:</label>
      <input class="inp" type="text" name="contact-name" id="contact-name">
    </div>
    <div class="ap item">
       <label class="lab">Apellido:</label>
       <input class="inp" type="text" name="contact-apellido" id="contact-apellido">
     </div>
     <div class="ema item">
        <label class="lab">Email:</label>
        <input class="inp" type="email" name="contact-email" id="contact-email"></input>
      </div>
      <div class="me item co">
         <label class="lab">Mensaje:</label>
         <textarea class="area" type="text" name="contact-message" id="contact-message"></textarea>
       </div>
       <button type="submit" class="btn bu" id="contact-btn" value="Enviar">Enviar</button>
      <div id="contact-results">
      <?php if(isset($mensaje)) { echo $mensaje; }?>  
    </div>
  </form>
</div>

<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>

<h1 class="tacto">Contacto</h1>
<div class="contactor">
  <form class="conta" action="">
    <div class="nom item">
      <label class="lab">Nombre:</label>
      <input class="inp" type="text" name="name" required/>
    </div>
    <div class="ap item">
       <label class="lab">Apellido:</label>
       <input class="inp" type="text" name="apellido" required/>
     </div>
     <div class="ema item">
        <label class="lab">Email:</label>
        <input class="inp" type="email" name="email" required></input>
      </div>
      <div class="me item co">
         <label class="lab">Mensaje:</label>
         <textarea class="area" type="text" required></textarea>
       </div>
       <button type="submit" class="bu conta__but">Enviar</button>
  </form>
</div>

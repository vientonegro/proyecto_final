<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>
        <header onload="cambiarImagenes()">
            <nav id="priMenu" id="arri">
                <ul>
                    <li><img id="lupa" src="<?php echo BASE_DOMAIN_DIR_IMG?>lupa.png" onclick="buscar()"></li>
                    <li><input type="text" id="buscar"  name="buscar" type="search" placeholder="Buscar ..." onblur="hide_input()" onkeyup="valida(event)"></li>
                </ul>
            </nav>

            	<h2 class="inser" id="bus" onclick="buscar()">Buscar<img id="lup" src="<?php echo BASE_DOMAIN_DIR_IMG?>lupa.png" ></h2>
 <div class="content">
     <?php echo $productos;?>
 </div>
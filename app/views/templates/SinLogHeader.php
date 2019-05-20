<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>

        <header onload="cambiarImagenes()">
            <nav id="priMenu" id="arri">
                <ul>
                    <li><img src="<?php echo BASE_DOMAIN_DIR_IMG?>pint2.png" id="logo"></li>
                    <li><a href="contacto/index">Contacto</a></li>
                    <li><a href="registro/index">Registro</a></li>
                    <li><a href="login/index">Login</a></li>
                    <li><img src="<?php echo BASE_DOMAIN_DIR_IMG?>carro2.png" id="carro"></li>
                    <li><img id="lupa" name="lupa" type="search" src="<?php echo BASE_DOMAIN_DIR_IMG?>lupa.png" onclick="buscar()"></li>
                    <li><input type="text" id="buscar" placeholder="Buscar ..." onblur="hide_input()" onkeyup="valida(event)"></li>
                </ul>
            </nav>
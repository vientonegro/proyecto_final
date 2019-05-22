<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>

        <header onload="cambiarImagenes()">
            <nav id="priMenu" id="arri">
                <ul>
                    <li><img src="<?php echo BASE_DOMAIN_DIR_IMG?>pint2.png" id="logo"></li>
                    <li><a href="contacto/index">Contacto</a></li>
                    <li><a href="perfil/index">Perfil <?php echo $_SESSION["usuario"];?></a></li>
                    <li><a href="login/salir">Salir</a></li>
                    <li><a href="search/index">Buscar</a></li>
                </ul>
            </nav>
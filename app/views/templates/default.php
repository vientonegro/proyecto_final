<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Plantilla MVC</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="<?php echo BASE_DOMAIN_DIR_URL?>">
        <link href="https://fonts.googleapis.com/css?family=Arizonia" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="webroot/css/home.css">
        <script type="text/javascript" src="webroot/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="webroot/js/home.js"></script>
    </head>
    <body>
        <header onload="cambiarImagenes()">
            <nav id="priMenu" id="arri">
                <ul>
                    <li><img src="<?php echo BASE_DOMAIN_DIR_IMG?>pint2.png" id="logo"></li>
                    <li><a href="../formulario/contacto.html">Contacto</a></li>
                    <li><a href="#sec3">Registro</a></li>
                    <li><a href="#sec3">Inicio</a></li>
                    <li><img src="<?php echo BASE_DOMAIN_DIR_IMG?>carro2.png" id="carro"></li>
                    <li><img id="lupa" src="<?php echo BASE_DOMAIN_DIR_IMG?>lupa.png" onclick="buscar()"></li>
                    <li><input type="text" id="buscar" placeholder="Buscar ..." onblur="hide_input()" onkeyup="valida(event)"></li>
                </ul>
            </nav>
            <div class="header_cab">
                <h1>Creation Art</h1>
            </div>
        </header>
        <nav id="segMenu">
            <ul>
                <li><a href="#sec1">Home</a></li>
                <li><a href="#sec2">Joyeria</a></li>
                <li><a href="#sec3">Artesania</a></li>
                <li><a href="#sec1">Pintura</a></li>
            </ul>
        </nav>
        <main>
                 <?php echo $content_for_layout;?> 
        </main>
        <footer>
            <div>
                <ul>
                    <li><h2 id="arriba" ><a href="#arri"></a>Arriba</h2></li>
                    <li><img src="<?php echo BASE_DOMAIN_DIR_IMG?>pint2.png" id="logo2"></li>
                    <li><h3> © 2019 Creation Art, Inc.</h3></li>
                </ul>
            </div>
        </footer>
    </body>
</html>
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
        <link rel="stylesheet" type="text/css" href="webroot/css/slider3d.css">   
        <script type="text/javascript" src="webroot/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="webroot/js/home.js"></script>
        <script type="text/javascript" src="webroot/js/contacto.js"></script>
        <link rel="stylesheet" type="text/css" href="webroot/css/contacto.css">   
    </head>
    <body>
        <header onload="cambiarImagenes()">
            <nav id="priMenu" id="arri">
                <ul>
                    <li><img src="<?php echo BASE_DOMAIN_DIR_IMG?>pint2.png" id="logo"></li>
                    <li><a href="contacto/index">Contacto</a></li>
                    <li><a href="registro/index">Registro</a></li>
                    <li><a href="login/index">Inicio</a></li>
                    <li><img src="<?php echo BASE_DOMAIN_DIR_IMG?>carro2.png" id="carro"></li>
                    <li><img id="lupa" src="<?php echo BASE_DOMAIN_DIR_IMG?>lupa.png" onclick="buscar()"></li>
                    <li><input type="text" id="buscar" placeholder="Buscar ..." onblur="hide_input()" onkeyup="valida(event)"></li>
                </ul>
            </nav>
            <div class="header_cab">
                <h1>Creation Art</h1>
            </div>
            <div class="sliderr">  
              <ul> 
                 <li>
                   <div class="title"><a href="#"></a></div>
                   <img src="<?php echo BASE_DOMAIN_DIR_IMG?>3.jpg" />           
                </li>    
                <li>
                  <div class="title"><a href="#"></a></div>
                  <img src="<?php echo BASE_DOMAIN_DIR_IMG?>joyeria.jpg" /> 
                </li>
                 <li>
                  <div class="title"><a href="#"></a></div>
                   <img src="<?php echo BASE_DOMAIN_DIR_IMG?>artesania.jpg" /> 
                </li>
                 <li>
                   <div class="title"><a href="#"></a></div>
                   <img src="<?php echo BASE_DOMAIN_DIR_IMG?>pintura.jpg" />           
                </li>
                 <li>
                   <div class="title"><a href="#"></a></div>
                   <img src="<?php echo BASE_DOMAIN_DIR_IMG?>13.jpg" />           
                </li>
                 <li>
                   <div class="title"><a href="#"></a></div>
                   <img src="<?php echo BASE_DOMAIN_DIR_IMG?>1.jpg" />           
                </li>    
                 <li>
                   <div class="title"><a href="#"></a></div>
                   <img src="<?php echo BASE_DOMAIN_DIR_IMG?>joyeria2.jpg" />           
                </li>
              </ul>
            </div> 
        </header>
        <nav id="segMenu">
            <ul>
                <li><a href="home/index">Home</a></li>
                <li><a href="categorias/index">Joyeria</a></li>
                <li><a href="categorias/index">Artesania</a></li>
                <li><a href="categorias/index">Pintura</a></li>
            </ul>
        </nav>
        <main>
                 <?php echo $content_for_layout;?> 
        </main>
        <div class="limpiar"></div>
        <footer>
                <h3 class="pie">© 2019 Creation Art, Inc.</h3>
        </footer>
    </body>
</html>
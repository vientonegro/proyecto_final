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
            <div class="cajaGrande">
                <section class="slider">
                    <div class="tit2">
                        <h2>Los mejores Regalos</h2>
                    </div>
                    <div>
                        <img name="slider">
                    </div>
                </section>
                    <section class="cajaMediana">
                        <div class="titulillo">
                        <h2>Lo más Popular</h2>
                        </div>
                        <article class="cajaPeque">
                            <div class="cajaMini"></div>
                            <h3 class="prod">Producto</h3>
                        </article>
                        <article class="cajaPeque">
                            <div class="cajaMini"></div>
                            <h3 class="prod">Producto</h3>
                        </article>
                        <article class="cajaPeque">
                            <div class="cajaMini"></div>
                            <h3 class="prod">Producto</h3>
                        </article>
                        <article class="cajaPeque">
                            <div class="cajaMini"></div>
                            <h3 class="prod">Producto</h3>
                        </article>
                        <article class="cajaPeque">
                            <div class="cajaMini"></div>
                            <h3 class="prod">Producto</h3>
                        </article>
                        <article class="cajaPeque">
                            <div class="cajaMini"></div>
                            <h3 class="prod">Producto</h3>
                        </article>
                    </section>
                    <aside id="entrada">
                        <h3 class="post">Te puede interesar</h3>
                        <ul class="reci">
                            <li class="letras">
                                <img class="foto" src="<?php echo BASE_DOMAIN_DIR_IMG?>11.jpg">
                                <span>Conocenos</span>
                            </li>
                        </ul>
                        <ul class="reci">
                            <li class="letras">
                                <img class="foto" src="<?php echo BASE_DOMAIN_DIR_IMG?>b.jpg">
                                <span>Que regalar</span>
                            </li>
                        </ul>
                        <ul class="reci">
                            <li class="letras">
                                <img class="foto" src="<?php echo BASE_DOMAIN_DIR_IMG?>f.jpg">
                                <span>Reseñas</span>
                            </li>
                        </ul>
                        <ul class="reci">
                            <li class="letras">
                                <img class="foto" src="<?php echo BASE_DOMAIN_DIR_IMG?>i.svg">
                                <span>Instagram</span>
                            </li>
                        </ul>
                        <ul class="reci">
                            <li class="letras">
                                <img class="foto" src="<?php echo BASE_DOMAIN_DIR_IMG?>f.svg">
                                <span>Facebook</span>
                            </li>
                        </ul>               
                    </aside>                    
            </div>  
            <div class="limpiar"></div>
                
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
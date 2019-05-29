<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>


        <main>
            <div class="cajaGrande">
                <section class="slider">
                    <div class="tit2">
                        <h2>Los mejores Regalos</h2>
                    </div>
                    <div>
                        <section id="slideshow">
                                <div class="entire-content">
                                    <div class="content-carrousel">
                                        <figure class="shadow"><img src="<?php echo BASE_DOMAIN_DIR_IMG?>1.jpg"/></figure>
                                        <figure class="shadow"><img src="<?php echo BASE_DOMAIN_DIR_IMG?>3.jpg"/></figure>
                                        <figure class="shadow"><img src="<?php echo BASE_DOMAIN_DIR_IMG?>9.jpg"/></figure>
                                        <figure class="shadow"><img src="<?php echo BASE_DOMAIN_DIR_IMG?>12.jpg"/></figure>
                                        <figure class="shadow"><img src="<?php echo BASE_DOMAIN_DIR_IMG?>13.jpg"/></figure>
                                        <figure class="shadow"><img src="<?php echo BASE_DOMAIN_DIR_IMG?>15.jpg"/></figure>
                                        <figure class="shadow"><img src="<?php echo BASE_DOMAIN_DIR_IMG?>16.jpg"/></figure>
                                        <figure class="shadow"><img src="<?php echo BASE_DOMAIN_DIR_IMG?>17.jpg"/></figure>
                                        <figure class="shadow"><img src="<?php echo BASE_DOMAIN_DIR_IMG?>10.jpg"/></figure>
                                    </div>
                                </div>
                        </section>
                    </div>
                </section>
                    <section class="cajaMediana">
                        <div class="titulillo">
                        <h2>Novedades</h2>
                        </div>

                        <div class="content">
                            <?php echo $productos;?>
                        </div>
                    </section>
                    <div style="clear: both;"></div>
                    <aside id="entrada">
                        <h3 class="post">Te puede interesar</h3>
                        <ul class="reci">
                            <li class="letras">
                                
                                    <img class="foto" src="<?php echo BASE_DOMAIN_DIR_IMG?>11.jpg">
                                    <a href="conocenos/index"><span>Conocenos</span>
                                </a>
                            </li>
                        </ul>
<!--                         <ul class="reci">
                            <li class="letras">
                                <img class="foto" src="<?php echo BASE_DOMAIN_DIR_IMG?>f.jpg">
                                <a href="conocenos/index">
                                <span>Reseñas</span>
                                </a>
                            </li>
                        </ul> -->
                        <ul class="reci">
                            <li class="letras">
                                <img class="foto" src="<?php echo BASE_DOMAIN_DIR_IMG?>i.svg">
                                <a href="https://www.instagram.com/?hl=es" target="_blank">
                                <span>Instagram</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="reci">
                            <li class="letras">
                                <img class="foto" src="<?php echo BASE_DOMAIN_DIR_IMG?>f.svg">
                                <a href="https://es-es.facebook.com/" target="_blank">
                                <span>Facebook</span>
                                </a>
                            </li>
                        </ul>               
                    </aside>                 
            </div>  
            <div style="clear: both;"></div> 
        </main>
		




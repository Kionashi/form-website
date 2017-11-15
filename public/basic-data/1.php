@extends('layouts.master')

@section('content')

<!-- About Section -->
<div id="about" class="page">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <!-- <div class="span12" style="height: 504px;">
                     <div class="title-page">
                         <h2 class="title">Cerrajería Tobio</h2>
                         <h3 class="title-description">Desde la tradición del hierro forjado...</h3>
                         <br />
                 -->          
                <div class="span3"></div>
                <video class="span6" width="100%" controls>
                    <source src="http://cerrajeriatobio.com/public/video/cerrajeria-tobio-promo.mp4" type="video/mp4">
                    Su navegador no sorporta videos cargados por HTML5, por favor atualice su navegador.
                </video>
                <div class="span3"></div>
           <!--  </div>
                   </div> -->
    </div>
    <!-- End Title Page -->
    
    <!-- People -->
    <div class="row">
    	
        <!-- Start Profile -->
    	<div class="span12 profile">
            <h3 class="profile-name">Cerrajería Tobio</h3>
            <p class="profile-description">Fundada hace más de 40 años, <strong>Cerrajería Tobío</strong> nace de la tradición del hierro forjado.<br>
              <br>
La incorporación de nuevas técnicas y avances en la producción de pequeñas estructuras metálicas, puertas, balcones, escaleras, pasamanos, etc. nos han permitido, en <strong>Cerrajería Tobío</strong>, abarcar todo tipo de trabajos, ampliando nuestra oferta mediante la incorporación del acero inoxidable y el aluminio soldado.<br>
<br>
Nuestro compromiso es ofrecer a nuestros clientes la máxima calidad  y  confianza en cada uno de los trabajos, aportando <strong>soluciones a su medida</strong></p>
            	
        </div>
        <!-- End Profile -->
    </div>
    <!-- End People -->
</div>
</div>
<!-- End About Section -->

<!-- Our Work Section -->
<div id="work" class="page-alternate">
	<div class="container">
    	<!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">Productos</h2>
                    <h3 class="title-description">Estos son algunos de nuestros trabajos.</h3>
                </div>
            </div>
        </div>
        <!-- End Title Page -->
        
        <!-- Portfolio Projects -->
        <div class="row">
        	<div class="span3">
            	<!-- Filter -->
                <nav id="options" class="work-nav">
                    <ul id="filters" class="option-set" data-option-key="filter">
                    	<li class="type-work">Tipos de trabajos</li>
                        <li><a href="#filter" data-option-value="*" class="selected">Todos</a></li>
                        <li><a href="#filter" data-option-value=".automatism">Automatismos</a></li>
                        <li><a href="#filter" data-option-value=".balconies">Balcones</a></li>
                        <li><a href="#filter" data-option-value=".closes">Cierres</a></li>
                        <li><a href="#filter" data-option-value=".stairs">Escaleras</a></li>
                        <li><a href="#filter" data-option-value=".structures">Estructuras</a></li>
                        <li><a href="#filter" data-option-value=".portals">Portales</a></li>
                        <li><a href="#filter" data-option-value=".front-doors">Puertas de entrada</a></li>
                        <li><a href="#filter" data-option-value=".banister">Pasamanos</a></li>
                        <li><a href="#filter" data-option-value=".section-doors">Puertas seccionales</a></li>
                        <li><a href="#filter" data-option-value=".others">Varios</a></li>
                    </ul>
                </nav>
                <!-- End Filter -->
            </div>
            
            <div class="span9">
            	<div class="row">
                	<section id="projects">
                    	<ul id="thumbs">
                        
                            <!-- AUTOMATISM SECTION -->
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 automatism">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Automatismos" href="http://cerrajeriatobio.com/public/img/productos/automatismos_1.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/automatismos_1_th.jpg" alt="Motor corredera ERREKA 1000Kg con final de carrera magnético.">
                            </li>
                            <!-- End Item Project -->
                            
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 automatism">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Automatismos" href="http://cerrajeriatobio.com/public/img/productos/automatismos_2.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/automatismos_2_th.jpg" alt="Motor corredera ERREKA 400Kg/800Kg con final de carrera magnético.">
                            </li>
                            <!-- End Item Project -->
                            
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 automatism">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Automatismos" href="http://cerrajeriatobio.com/public/img/productos/automatismos_7.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/automatismos_7_th.jpg" alt="Motor electromecánico para puertas basculantes.">
                            </li>
                            <!-- End Item Project -->
                            
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 automatism">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Automatismos" href="http://cerrajeriatobio.com/public/img/productos/automatismos_8.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/automatismos_8_th.jpg" alt="Motor hidráulico para puertas abatibles.">
                            </li>
                            <!-- End Item Project -->
                            
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 automatism">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Automatismos" href="http://cerrajeriatobio.com/public/img/productos/automatismos_9.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/automatismos_9_th.jpg" alt="Motor de techo 60Kg/100Kg.">
                            </li>
                            <!-- End Item Project -->

                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 balconies">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Balcones" href="http://cerrajeriatobio.com/public/img/productos/balcones_1.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/balcones_1_th.jpg" alt="Balcón con barrote modelo Santiago.">
                            </li>
                            <!-- End Item Project -->
                            
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 balconies">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Balcones" href="http://cerrajeriatobio.com/public/img/productos/balcones_2.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/balcones_2_th.jpg" alt="Balcón de acero inoxidable con seis barras occidentales.">
                            </li>
                            <!-- End Item Project -->
                            
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 balconies">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Balcones" href="http://cerrajeriatobio.com/public/img/productos/balcones_3.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/balcones_3_th.jpg" alt="Balcón de tubo redondo curvo.">
                            </li>
                            <!-- End Item Project -->
                            
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 balconies">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Balcones" href="http://cerrajeriatobio.com/public/img/productos/balcones_4.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/balcones_4_th.jpg" alt="Balcón de aluminio con barrote dragón y solera.">
                            </li>
                            <!-- End Item Project -->
                            
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 balconies">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Balcones" href="http://cerrajeriatobio.com/public/img/productos/balcones_5.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/balcones_5_th.jpg" alt="Balcón de acero inoxidable con dos barras horizontales.">
                            </li>
                            <!-- End Item Project -->
                            
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 balconies">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Balcones" href="http://cerrajeriatobio.com/public/img/productos/balcones_6.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/balcones_6_th.jpg" alt="Balcón curvo con barrote dragón y solera.">
                            </li>
                            <!-- End Item Project -->
                            
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 balconies">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Balcones" href="http://cerrajeriatobio.com/public/img/productos/balcones_7.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/balcones_7_th.jpg" alt="Balcón de aluminio.">
                            </li>
                            <!-- End Item Project -->
                            
                            <!-- CLOSES SECTION -->
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 closes">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Cierres" href="http://cerrajeriatobio.com/public/img/productos/cierres1.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/cierres1_th.jpg" alt="Cierre de forja con macollas de hierro fundido.">
                            </li>
                            <!-- End Item Project -->
                            
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 closes">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Cierres" href="http://cerrajeriatobio.com/public/img/productos/cierres2.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/cierres2_th.jpg" alt="Cierre de aluminio con balaustres tulipán.">
                            </li>
                            <!-- End Item Project -->
                            
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 closes">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Cierres" href="http://cerrajeriatobio.com/public/img/productos/cierres3.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/cierres3_th.jpg" alt="Cierre tubo ornamental.">
                            </li>
                            <!-- End Item Project -->
                            
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 closes">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Cierres" href="http://cerrajeriatobio.com/public/img/productos/cierres4.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/cierres4_th.jpg" alt="Cierre tubular con marco.">
                            </li>
                            <!-- End Item Project -->
                            
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 closes">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Cierres" href="http://cerrajeriatobio.com/public/img/productos/cierres5.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/cierres5_th.jpg" alt="Cierre en cruz.">
                            </li>
                            <!-- End Item Project -->
                            
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 closes">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Cierres" href="http://cerrajeriatobio.com/public/img/productos/cierres6.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/cierres6_th.jpg" alt="Cierre tubular sin marco.">
                            </li>
                            <!-- End Item Project -->
                            
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 closes">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Cierres" href="http://cerrajeriatobio.com/public/img/productos/cierres7.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/cierres7_th.jpg" alt="Cierre de aluminio con barrote curvo.">
                            </li>
                            <!-- End Item Project -->
                            
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 closes">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Cierres" href="http://cerrajeriatobio.com/public/img/productos/cierres8.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/cierres8_th.jpg" alt="Cierre inox con imitación madera.">
                            </li>
                            <!-- End Item Project -->
                            
                            <!-- STAIRS SECTION -->
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 stairs">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Escaleras" href="http://cerrajeriatobio.com/public/img/productos/escaleras_1.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/escaleras_1_th.jpg" alt="Escalera caracol simple.">
                            </li>
                            <!-- End Item Project -->
                            
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 stairs">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Escaleras" href="http://cerrajeriatobio.com/public/img/productos/escaleras_2.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/escaleras_2_th.jpg" alt="Escalera caracol barote forja.">
                            </li>
                            <!-- End Item Project -->
                            
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 stairs">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Escaleras" href="http://cerrajeriatobio.com/public/img/productos/escaleras_3.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/escaleras_3_th.jpg" alt="Escalera met&aacute;lica exterior.">
                            </li>
                            <!-- End Item Project -->

                            <!-- STRUCTURES SECTION -->
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 structures">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Estructuras" href="http://cerrajeriatobio.com/public/img/productos/estructuras_1.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/estructuras_1_th.jpg" alt="Ampliaci&oacute;n nave con estructura met&aacute;lica.">
                            </li>
                            <!-- End Item Project -->
                            
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 structures">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Estructuras" href="http://cerrajeriatobio.com/public/img/productos/estructuras_2.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/estructuras_2_th.jpg" alt="Estructura met&aacute;lica en IPE de 270.">
                            </li>
                            <!-- End Item Project -->
                            
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 structures">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Estructuras" href="http://cerrajeriatobio.com/public/img/productos/estructuras_3.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/estructuras_3_th.jpg" alt="Estructura met&aacute;lica en IPE de 270.">
                            </li>
                            <!-- End Item Project -->

                            <!-- PORTALS SECTION -->
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 portals">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portales" href="http://cerrajeriatobio.com/public/img/productos/portales_1.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/portales_1_th.jpg" alt="Portal abatible de una hoja y puerta peatonal modelo veneciana.">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 portals">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portales" href="http://cerrajeriatobio.com/public/img/productos/portales_2.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/portales_2_th.jpg" alt="Portal abatible de dos hojas modelo cruz.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 portals">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portales" href="http://cerrajeriatobio.com/public/img/productos/portales_3.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/portales_3_th.jpg" alt="Portal corredera con piezas de fundición y de forja.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 portals">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portales" href="http://cerrajeriatobio.com/public/img/productos/portales_4.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/portales_4_th.jpg" alt="Portal de corredera con chapa de acero corten plegada.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 portals">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portales" href="http://cerrajeriatobio.com/public/img/productos/portales_5.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/portales_5_th.jpg" alt="Portal abatible de dos hojas modelo ciego.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 portals">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portales" href="http://cerrajeriatobio.com/public/img/productos/portales_6.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/portales_6_th.jpg" alt="Portal de corredera de acero inoxidable con entrepaños.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 portals">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portales" href="http://cerrajeriatobio.com/public/img/productos/portales_7.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/portales_7_th.jpg" alt="Portal de corredera modelo forjado.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 portals">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portales" href="http://cerrajeriatobio.com/public/img/productos/portales_8.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/portales_8_th.jpg" alt="Portal abatible de dos hojas forjado y con entrepaños.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 portals">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portales" href="http://cerrajeriatobio.com/public/img/productos/portales_9.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/portales_9_th.jpg" alt="Portal de corredera de acero inoxidable con panel imitación madera.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 portals">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portales" href="http://cerrajeriatobio.com/public/img/productos/portales_10.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/portales_10_th.jpg" alt="Portal de corredera y puerta peatonal de acero corten modelo veneciana.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 portals">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portales" href="http://cerrajeriatobio.com/public/img/productos/portales_11.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/portales_11_th.jpg" alt="Portal abatible de una hoja y puerta peatonal de aluminio soldado con barrote curvo.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 portals">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portales" href="http://cerrajeriatobio.com/public/img/productos/portales_12.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/portales_12_th.jpg" alt="Portal de corredera de aluminio soldado con barrote dragón.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 portals">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portales" href="http://cerrajeriatobio.com/public/img/productos/portales_13.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/portales_13_th.jpg" alt="Portal de corredera de aluminio soldado con solera de aros.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 portals">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portales" href="http://cerrajeriatobio.com/public/img/productos/portales_14.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/portales_14_th.jpg" alt="Portal de aluminio con panel imitación madera.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 portals">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portales" href="http://cerrajeriatobio.com/public/img/productos/portales_15.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/portales_15_th.jpg" alt="Portal de acero inoxidable con panel de aluminio.">
                            </li>
                        	<!-- End Item Project -->

                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 portals">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portales" href="http://cerrajeriatobio.com/public/img/productos/portales_16.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/portales_16_th.jpg" alt="Portal corredera formado con tramex.">
                            </li>
                            <!-- End Item Project -->
                        	
                        	
                        	
                        	<!-- FRONT DOORS -->
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 front-doors">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Puertas de entrada" href="http://cerrajeriatobio.com/public/img/productos/puertas_1.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/puertas_1_th.jpg" alt="Puerta modelo cruz.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 front-doors">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Puertas de entrada" href="http://cerrajeriatobio.com/public/img/productos/puertas_2.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/puertas_2_th.jpg" alt="Puerta de acero inoxidable.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 front-doors">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Puertas de entrada" href="http://cerrajeriatobio.com/public/img/productos/puertas_3.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/puertas_3_th.jpg" alt="Puerta de hierro forjado con rombos de metal.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 front-doors">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Puertas de entrada" href="http://cerrajeriatobio.com/public/img/productos/puertas_4.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/puertas_4_th.jpg" alt="Puerta modelo tubular.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 front-doors">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Puertas de entrada" href="http://cerrajeriatobio.com/public/img/productos/puertas_5.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/puertas_5_th.jpg" alt="Puerta de hierro forjado con rosetones de aluminio y metal.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 front-doors">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Puertas de entrada" href="http://cerrajeriatobio.com/public/img/productos/puertas_6.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/puertas_6_th.jpg" alt="Puerta modelo tubular con cuadrados de metal.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 front-doors">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Puertas de entrada" href="http://cerrajeriatobio.com/public/img/productos/puertas_7.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/puertas_7_th.jpg" alt="Puerta con mainel curvo.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 front-doors">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Puertas de entrada" href="http://cerrajeriatobio.com/public/img/productos/puertas_8.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/puertas_8_th.jpg" alt="Puerta de forja con macollas de metal.">
                            </li>
                        	<!-- End Item Project -->
                        	

                            <!-- BANISTER SECTION -->
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 banister">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Pasamanos" href="http://cerrajeriatobio.com/public/img/productos/pasamanos_1.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/pasamanos_1_th.jpg" alt="Pasamanos inoxidable modelo accesibilidad.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 banister">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Pasamanos" href="http://cerrajeriatobio.com/public/img/productos/pasamanos_2.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/pasamanos_2_th.jpg" alt="Pasamanos inoxidable con cinco barras horizontales.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 banister">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Pasamanos" href="http://cerrajeriatobio.com/public/img/productos/pasamanos_3.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/pasamanos_3_th.jpg" alt="Pasamanos metálico modelo simple.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 banister">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Pasamanos" href="http://cerrajeriatobio.com/public/img/productos/pasamanos_4.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/pasamanos_4_th.jpg" alt="Pasamanos de forja con salomónicos y rombos de metal.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 banister">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Pasamanos" href="http://cerrajeriatobio.com/public/img/productos/pasamanos_5.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/pasamanos_5_th.jpg" alt="Pasamanos inoxidable curvo.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 banister">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Pasamanos" href="http://cerrajeriatobio.com/public/img/productos/pasamanos_6.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/pasamanos_6_th.jpg" alt="Pasamanos inoxidable modelo valona.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 banister">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Pasamanos" href="http://cerrajeriatobio.com/public/img/productos/pasamanos_7.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/pasamanos_7_th.jpg" alt="Pasamanos de forja modelo stela.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 banister">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Pasamanos" href="http://cerrajeriatobio.com/public/img/productos/pasamanos_8.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/pasamanos_8_th.jpg" alt="Pasamanos de forja con macollas.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 banister">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Pasamanos" href="http://cerrajeriatobio.com/public/img/productos/pasamanos_9.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/pasamanos_9_th.jpg" alt="Pasamanos inoxidable modelo accesibilidad.">
                            </li>
                        	<!-- End Item Project -->                                            
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 banister">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Pasamanos" href="http://cerrajeriatobio.com/public/img/productos/pasamanos_10.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/pasamanos_10_th.jpg" alt="Pasamanos de forja modelo barón.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 banister">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Pasamanos" href="http://cerrajeriatobio.com/public/img/productos/pasamanos_11.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/pasamanos_11_th.jpg" alt="Pasamanos de forja.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	
                        	<!-- SECTION DOORS -->
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 section-doors">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Puertas Seccionales" href="http://cerrajeriatobio.com/public/img/productos/puertas_seccionales_1.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/puertas_seccionales_1_th.jpg" alt="Puertas seccional panel gris.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 section-doors">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Puertas Seccionales" href="http://cerrajeriatobio.com/public/img/productos/puertas_seccionales_2.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/puertas_seccionales_2_th.jpg" alt="Puertas seccional panel imitación madera.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 others">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Varios" href="http://cerrajeriatobio.com/public/img/productos/varios_1.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/varios_1_th.jpg" alt="Reja de aluminio con barrote curvo.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 others">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Varios" href="http://cerrajeriatobio.com/public/img/productos/varios_2.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/varios_2_th.jpg" alt="Pérgola con HEB de 160mm.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 others">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Varios" href="http://cerrajeriatobio.com/public/img/productos/varios_3.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/varios_3_th.jpg" alt="Reja de forja.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 others">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Varios" href="http://cerrajeriatobio.com/public/img/productos/hipodromo_campanyo_1.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/hipodromo_1_th.jpg" alt="Obra Hipódromo de la Comunidad de Montes de Campañó.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 others">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Varios" href="http://cerrajeriatobio.com/public/img/productos/hipodromo_campanyo_3.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/hipodromo_3_th.jpg" alt="Obra Hipódromo de la Comunidad de Montes de Campañó.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 others">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Varios" href="http://cerrajeriatobio.com/public/img/productos/hipodromo_campanyo_4.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/hipodromo_4_th.jpg" alt="Obra Hipódromo de la Comunidad de Montes de Campañó.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 others">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Varios" href="http://cerrajeriatobio.com/public/img/productos/hipodromo_campanyo_5.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/hipodromo_5_th.jpg" alt="Obra Hipódromo de la Comunidad de Montes de Campañó.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 others">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Varios" href="http://cerrajeriatobio.com/public/img/productos/centro_inclusion_poio_2.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/centro_2_th.jpg" alt="Obra instalaciones Asociación Inclusión en San Salvador de Poio.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 others">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Varios" href="http://cerrajeriatobio.com/public/img/productos/centro_inclusion_poio_3.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/centro_3_th.jpg" alt="Obra instalaciones Asociación Inclusión en San Salvador de Poio.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 others">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Varios" href="http://cerrajeriatobio.com/public/img/productos/centro_inclusion_poio_4.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/centro_4_th.jpg" alt="Obra instalaciones Asociación Inclusión en San Salvador de Poio.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 others">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Varios" href="http://cerrajeriatobio.com/public/img/productos/varios_4.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/varios_4_th.jpg" alt="Escultura Gimnasta.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 others">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Varios" href="http://cerrajeriatobio.com/public/img/productos/varios_5.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/varios_5_th.jpg" alt="Estructura corazón decorativo para boda.">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 others">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Varios" href="http://cerrajeriatobio.com/public/img/productos/varios_6.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://cerrajeriatobio.com/public/img/productos/varios_6_th.jpg" alt="Protectores columnas.">
                            </li>
                        	<!-- End Item Project -->
                        </ul>
                    </section>
                    
            	</div>
            </div>
        </div>
        <!-- End Portfolio Projects -->
    </div>
</div>
<!-- End Our Work Section -->
<!-- Contact Section -->
<div id="contact" class="page">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                <h2 class="title">Contacto</h2>
                <h3 class="title-description">¡Pida presupuesto sin compromiso!</h3>
            </div>
        </div>
    </div>
    <!-- End Title Page -->
    
    <!-- Contact Form -->
    <div class="row">
    	<div class="span9">
        	{!!Form::open(array('url' => 'http://cerrajeriatobio.com/index.php/contacto', 'class' => 'contact-form', 'id' => 'contact-form'))!!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">

            	<p class="contact-name">
            		{!!Form::text('contact_name',null ,array('placeholder' => 'Nombre'))!!}
                </p>
                <p class="contact-email">
                	{!!Form::text('contact_email',null ,array('placeholder' => 'Correo electr&oacute;nico'))!!}
                </p>
                <p class="contact-message">
                	<textarea id="contact_message" placeholder="Mensaje" name="message" rows="15" cols="40"></textarea>
                </p>
                <div style="width: 100%">
                    {!!Recaptcha::render()!!}
                </div>
                <p class="contact-submit">
                	{!!Form::submit('Contáctanos', array('class' => 'submit'))!!}
                </p>
                
                <div id="response">
                	@if(isset($response))
                		{{$response}}
                	@endif
                	@if (count($errors) > 0)
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
                </div>
            {!!Form::close()!!}
         
        </div>
        
        <div class="span3">
        	<div class="contact-details">
        		<h3>Dirección de contacto</h3>
                <ul>
                    <li><a href="mailto:info@cerrajeriatobio.com">info@cerrajeriatobio.com</a></li>
                    <li><b>Tel&eacute;fono:</b> <span class="organge">986 872 890</span></li>
                    <li><b>M&oacute;vil:</b> <span class="organge">666 407 735 </span></li>
                    <li><a target="_blank" href="https://www.facebook.com/tobiocerrajeria/"><img style="height: 29px;" src="http://cerrajeriatobio.com/public/img/facebook.png"></a></li>
                    <li>
                        O Vao 45 <a>|</a> Ctra. Vilagarcía, Poio 
                        <br>
                         36163 Pontevedra.
                        <br>
                    </li>
                    <li><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2475.9103660351507!2d-8.651444331639244!3d42.441138308011865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2f71e7dcf52655%3A0x5133c3933616768d!2zQ2VycmFqZXLDrWEgVG9iw61v!5e0!3m2!1ses-419!2sve!4v1454542752439" height="168" frameborder="0" style="border:0" allowfullscreen></iframe></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Contact Form -->
</div>
</div>
<!-- End Contact Section -->



<!-- Footer -->
<div class="page-alternate">
	<div class="container">
    	<div class="row">
            <div class="span3">
            </div>
    		<div class="span5" style="text-align: center">
	          <h3><a href="#about">Empresa</a> | <a href="#work">Productos</a> | <a href="#contact">Contacto</a></h3>
	            <div id="soluciones_pie">Soluciones a su medida
	            <p><a href="#contact"><strong>Pida presupuesto sin compromiso</strong></a></p>
	            </div>
	        </div>
	        <div class="span4" style="">
	        	©2016 Cerrajería Tobío<br />
	          	Todos los derechos reservados.<br />
	          	O Vao 45 <span class="organge">|</span> Ctra. Vilagarcía, Poio<br />
		        36163 Pontevedra<br />
		        <b>Tel/Fax:</b> <span class="organge">986 872 890</span>
	        </div>
        </div>
    </div>
</div>
<!-- End Footer -->
@endsection

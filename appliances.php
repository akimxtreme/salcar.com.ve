<?php include_once("functions.php"); ?>
<?php head(); ?>
<?php menu(); ?>
<!-- Portfolio Projects -->
<section id="inner-headline">
	<div class="container">
		<div class="row" style="margin-bottom:0px;">
			<div class="col-lg-12">
				<h1>Electrodomésticos</h1>				
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="container">
		<?php category_menu('electrodomesticos'); ?>
		<div class="row">
			<div class="col-lg-12">
				<!--<h4 class="heading">Productos</h4>-->
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">
						<?php
						// producto($title,$imgSmall,$imgBig,$description)						
						producto(
							'Batidora Negra Manual SALCAR <br>5 velocidades',
							'img/productos/electrodomesticos/SAL-BATM002.jpg',
							'',
							'<small>SAL-BATM002</small><br>&raquo; Botón de expulsión de aspas.<br>&raquo; Ganchos y Aspas cromadas.<br>&raquo; Potencia 240W.'
							);
						producto(
							'Batidora Blanca Manual SALCAR <br>5 velocidades',
							'img/productos/electrodomesticos/SAL-BATM001.jpg',
							'',
							'<small>SAL-BATM001</small><br>&raquo; Botón de expulsión de aspas.<br>&raquo; Ganchos y Aspas cromadas.<br>&raquo; Potencia 240W.'
							);
						producto(
							'Batidora Blanca de Pedestal SALCAR <br>5 velocidades',
							'img/productos/electrodomesticos/SAL-BATP001.jpg',
							'',
							'<small>SAL-BATP001</small><br>&raquo; Bowl de plástico.<br>&raquo; Botón de expulsión de aspas.<br>&raquo; Ganchos y Aspas cromadas.<br>&raquo; Potencia 300W.'
							);
						producto(
							'Batidora Blanca de Pedestal SALCAR <br>5 velocidades',
							'img/productos/electrodomesticos/SAL-BATP003.jpg',
							'',
							'<small>SAL-BATP003</small><br>&raquo; Bowl de acero.<br>&raquo; Botón de expulsión de aspas.<br>&raquo; Ganchos y Aspas cromadas.<br>&raquo; Potencia 300W.'
							);
						producto(
							'Batidora Negra de Pedestal SALCAR <br>5 velocidades',
							'img/productos/electrodomesticos/SAL-BATP002.jpg',
							'',
							'<small>SAL-BATP002</small><br>&raquo; Bowl de plástico.<br>&raquo; Botón de expulsión de aspas.<br>&raquo; Ganchos y Aspas cromadas.<br>&raquo; Potencia 300W.'
							);
						producto(
							'Batidora Negra de Pedestal SALCAR <br>5 velocidades',
							'img/productos/electrodomesticos/SAL-BATP004.jpg',
							'',
							'<small>SAL-BATP004</small><br>&raquo; Bowl de acero.<br>&raquo; Botón de expulsión de aspas.<br>&raquo; Ganchos y Aspas cromadas.<br>&raquo; Potencia 300W.'
							);
						producto(
							'Cocina Eléctrica SALCAR <br>1 hornilla',
							'img/productos/electrodomesticos/SAL-COCIE001.jpg',
							'',
							'<small>SAL-COCIE001</small><br>&raquo; Sistema de calefacción en acero inoxidable.<br>&raquo; Control de termostato para distintos niveles de temperatura.<br>&raquo; Duradera y fácil de limpiar / Compacta y portátil.<br>&raquo; Para uso domestico exclusivamente.'
							);
						producto(
							'Cocina Eléctrica SALCAR <br>2 hornillas',
							'img/productos/electrodomesticos/SAL-COCIE002.jpg',
							'',
							'<small>SAL-COCIE002</small><br>&raquo; Sistema de calefacción en acero inoxidable.<br>&raquo; Control de termostato para distintos niveles de temperatura.<br>&raquo; Duradera y fácil de limpiar / Compacta y portátil.<br> &raquo; Para uso domestico exclusivamente.'
							);
						producto(
							'Licuadora Cromada SALCAR <br>de 5 velocidades',
							'img/productos/electrodomesticos/SAL-LICS001.jpg',
							'',
							'<small>SAL-LICS001</small><br>&raquo; Vaso de vidrio con capacidad de 1.5 litros.<br>&raquo; Cuchilla de acero inoxidable.<br>&raquo; Potencia 500W.'
							);
						producto(
							'Licuadora Cromada SALCAR <br>de 12 velocidades',
							'img/productos/electrodomesticos/SAL-LICS002.jpg',
							'',
							'<small>SAL-LICS002</small><br>&raquo; Vaso de vidrio con capacidad de 1.5 litros.<br>&raquo; Cuchilla de acero inoxidable.<br>&raquo; Potencia 800W.'
							);
						producto(
							'Licuadora SALCAR Base Plástica <br>Negra 2 velocidades',
							'img/productos/electrodomesticos/SAL-LICP003.jpg',
							'',
							'<small>SAL-LICP003</small><br>&raquo; Vaso plástico con capacidad de 1.5 litros.<br>&raquo; Potencia 450W.'
							);
						producto(
							'Licuadora SALCAR Base Plástica <br>Blanca 2 velocidades',
							'img/productos/electrodomesticos/SAL-LICP004.jpg',
							'',
							'<small>SAL-LICP004</small><br>&raquo; Vaso plástico con capacidad de 1.5 litros.<br>&raquo; Potencia 450W.<br>'
							);
						producto(
							'Mini Procesador <br>de Alimentos',
							'img/productos/electrodomesticos/SAL-FP375.jpg',
							'',
							'<small>SAL-FP375</small><br>&raquo; Bowl de capacidad de 1.5 tazas.<br>&raquo; Disco de acero inoxidable para rebanar y rallar.<br>&raquo; Cuchilla para picar.<br>&raquo; Mezclador.<br>&raquo; Empujador de alimentos.'
							);
						/*
						producto(
							'',
							'img/productos/electrodomesticos/.jpg',
							'',
							'<small></small><br>&raquo; <br>&raquo; <br>&raquo; '
							);
						*/														
						
						?>						
					</ul>
					</section>
				</div>
			</div>
		</div>
</div>
	</section>
<?php footer(); ?>
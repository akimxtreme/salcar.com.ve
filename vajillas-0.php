<?php include_once("functions.php"); ?>
<?php head(); ?>
<?php menu(); ?>
<!-- Portfolio Projects -->
<section id="inner-headline">
	<div class="container">
		<div class="row" style="margin-bottom:0px;">
			<div class="col-lg-12">
				<h1>Vajillas y Cristalería</h1>				
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="container">
		<?php category_menu('vajillas'); ?>
		<div class="row">
			<div class="col-lg-12">
				<!--<h4 class="heading">Productos</h4>-->
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">
						<?php
						// producto($title,$imgSmall,$imgBig,$description)
						producto(
							'Juego de jarra con 6 vasos <br>transparentes borde verde',
							'img/productos/vajillas/no_disponible.jpg',
							'',
							'<small>SAL-XXXXXXX-XX</small><br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.'
							);
						producto(
							'Juego de 6 vasos <br>cortos 200 ml',
							'img/productos/vajillas/no_disponible.jpg',
							'',
							'<small>SAL-XXXXXXX-XX</small><br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.'
							);
						producto(
							'Juego de jarra con 6 vasos <br>y 6 copas',
							'img/productos/vajillas/no_disponible.jpg',
							'',
							'<small>SAL-XXXXXXX-XX</small><br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.'
							);
						producto(
							'Set de 6 vasos <br>para licor',
							'img/productos/vajillas/no_disponible.jpg',
							'',
							'<small>SAL-XXXXXXX-XX</small><br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.'
							);
						producto(
							'Vajilla Butterfly de 24 piezas <br>para 6 personas',
							'img/productos/vajillas/no_disponible.jpg',
							'',
							'<small>SAL-XXXXXXX-XX</small><br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.'
							);
						producto(
							'Vajilla Butterfly de 28 piezas <br>para 4 personas',
							'img/productos/vajillas/no_disponible.jpg',
							'',
							'<small>SAL-XXXXXXX-XX</small><br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.'
							);
						producto(
							'Vajilla Butterfly de 42 piezas <br>para 6 personas',
							'img/productos/vajillas/no_disponible.jpg',
							'',
							'<small>SAL-XXXXXXX-XX</small><br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.'
							);
						producto(
							'Juego de Jarra <br>con 6 vasos Butterfly',
							'img/productos/vajillas/no_disponible.jpg',
							'',
							'<small>SAL-XXXXXXX-XX</small><br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.'
							);
						producto(
							'Vajilla Fantasia de 20 piezas <br>para 4 personas',
							'img/productos/vajillas/no_disponible.jpg',
							'',
							'<small>SAL-XXXXXXX-XX</small><br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.'
							);
						producto(
							'Juego 6 vasos largos <br>con borde dorado 300 ml',
							'img/productos/vajillas/no_disponible.jpg',
							'',
							'<small>SAL-XXXXXXX-XX</small><br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.'
							);
						producto(
							'Vajilla Fantasia de 47 piezas <br>para 8 personas',
							'img/productos/vajillas/no_disponible.jpg',
							'',
							'<small>SAL-XXXXXXX-XX</small><br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.'
							);
						







						producto(
							'Vajilla Cuadrada de <br>20 piezas en porcelana',
							'img/productos/vajillas/SAL-VAJI20C.jpg',
							'',
							'<small>SAL-VAJI20C</small><br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Lorem ipsum.<br>&raquo; Plato llano 25 cm 4 piezas.'
							);
						
						// no_disponible											
						?>						
					</ul>
					</section>
				</div>
			</div>
		</div>
</div>
	</section>
<?php footer(); ?>
<?php include_once("functions.php"); ?>
<?php head(); ?>
<?php menu(); ?>
<!-- Portfolio Projects -->
<section id="inner-headline">
	<div class="container">
		<div class="row" style="margin-bottom:0px;">
			<div class="col-lg-12">
				<h1>Vajillas</h1>				
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
							'Vajilla Redonda de <br>20 piezas en porcelana',
							'img/productos/vajillas/SAL-VAJI20R9-SAL-VAJI20R105.jpg',
							'',
							'<small>SAL-VAJI20R9 / SAL-VAJI20R105</small><br>&raquo; Taza café grande con plato 4+4 piezas.<br>&raquo; Plato de postre 19 cm 4 piezas.<br>&raquo; Plato de sopa 20 cm 4 piezas.<br>&raquo; Plato llano 23 cm 4 piezas. (SAL-VAJI20R9)<br>&raquo; Plato llano 26 cm 4 piezas .(SAL-VAJI20R105)'
							);
						producto(
							'Vajilla Cuadrada de <br>20 piezas en porcelana',
							'img/productos/vajillas/SAL-VAJI20C.jpg',
							'',
							'<small>SAL-VAJI20C</small><br>&raquo; Taza café grande con plato 4+4 piezas.<br>&raquo; Plato de postre 19 cm 4 piezas.<br>&raquo; Plato de sopa 20 cm 4 piezas.<br>&raquo; Plato llano 25 cm 4 piezas.'
							);
						
						// SAL-VAJI20R9-SAL-VAJI20R105											
						?>						
					</ul>
					</section>
				</div>
			</div>
		</div>
</div>
	</section>
<?php footer(); ?>
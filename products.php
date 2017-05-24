<?php include_once("functions.php"); ?>
<?php head(); ?>
<?php menu(); ?>
<!-- Portfolio Projects -->
<section id="inner-headline">
	<div class="container">
		<div class="row" style="margin-bottom:0px;">
			<div class="col-lg-12">
				<h1>Productos</h1>				
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="container">
		<?php category_menu('todos'); ?>
		<div class="row">
			<div class="col-lg-12">
				<!--<h4 class="heading">Productos</h4>-->
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">
						<!-- Item Producto # 1 -->
						<li class="col-md-3 col-sm-6 col-xs-6 design" data-id="id-0" data-type="web">
							<div class="item-thumbs">
								<!-- Fancybox - Gallery Enabled - Title - Full Image -->
								<a class="hover-wrap" data-fancybox-group="gallery" title="Electrodomésticos" href="electrodomesticos">
								<span class="overlay-img"></span>
								<span class="overlay-img-thumb font-icon-plus"></span>
								</a>
								<!-- Thumb Image and Description -->
								<img src="img/productos/producto-electrodomestico.jpg" data-link="electrodomesticos" data-desc="">
							</div>
							<a href="electrodomesticos"><div class="title"><h3 class="text-center">Electrodomésticos</h3></div></a>
						</li>
						<!-- End Item Prducto # 1 -->

						<!-- Item Producto # 2 -->
						<li class="col-md-3 col-sm-6 col-xs-6 design" data-id="id-0" data-type="web">
							<div class="item-thumbs">
								<!-- Fancybox - Gallery Enabled - Title - Full Image -->
								<a class="hover-wrap" data-fancybox-group="gallery" title="Ollas y Sartenes" href="ollas-sartenes">
								<span class="overlay-img"></span>
								<span class="overlay-img-thumb font-icon-plus"></span>
								</a>
								<!-- Thumb Image and Description -->
								<img src="img/productos/producto-olla-2.jpg" data-link="ollas-sartenes" data-desc="">
							</div>
							<a href="ollas-sartenes"><div class="title"><h3 class="text-center">Ollas y Sartenes</h3></div></a>
						</li>
						<!-- End Item Prducto # 2 -->

						<!-- Item Producto # 3 -->
						<li class="col-md-3 col-sm-6 col-xs-6 design" data-id="id-0" data-type="web">
							<div class="item-thumbs">
								<!-- Fancybox - Gallery Enabled - Title - Full Image -->
								<a class="hover-wrap" data-fancybox-group="gallery" title="Vajillas y Cristalería" href="vajillas">
								<span class="overlay-img"></span>
								<span class="overlay-img-thumb font-icon-plus"></span>
								</a>
								<!-- Thumb Image and Description -->
								<img src="img/productos/producto-vajilla.jpg" data-link="vajillas" data-desc="">
							</div>
							<a href="vajillas"><div class="title"><h3 class="text-center">Vajillas y Cristalería</h3></div></a>
						</li>
						<!-- End Item Prducto # 3 -->

						<!-- Item Producto # 4 -->
						<li class="col-md-3 col-sm-6 col-xs-6 design" data-id="id-0" data-type="web">
							<div class="item-thumbs">
								<!-- Fancybox - Gallery Enabled - Title - Full Image -->
								<a class="hover-wrap" data-fancybox-group="gallery" title="Todos" href="catalogo" data-desc="">
								<span class="overlay-img"></span>
								<span class="overlay-img-thumb font-icon-plus"></span>
								</a>
								<!-- Thumb Image and Description -->
								<img src="img/productos/producto-otros.jpg" data-link="catalogo" data-desc="">
							</div>
							<a href="catalogo"><div class="title"><h3 class="text-center">Catálogo</h3></div></a>
						</li>
						<!-- End Item Prducto # 4 -->
												
					</ul>
					</section>
				</div>
			</div>
		</div>
</div>
	</section>
<?php footer(); ?>
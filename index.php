<?php include_once("functions.php"); ?>
<?php head(); ?>
<?php menu(); ?>
	    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
     
    <!-- Default Theme -->
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
     
    <!--  jQuery 1.7+  -->
    <script src="assets/js/jquery-1.9.1.min.js"></script>
     
    <!-- Include js plugin -->
    <script src="owl-carousel/owl.carousel.js"></script>
    

	<section id="featured">
	<!-- start slider -->
	<div class="container">		
		<div class="row">
			<div class="col-lg-12">
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">                        	
              <li>
                <img src="img/slides/salcar-ve-1.jpg" alt="" />
                <div class="flex-caption izquierda">
                    <h3>ELECTRODOMÉSTICOS</h3> 
					<p>Batidoras, Cocinas Eléctricas, Licuadoras, entre otros</p> 
					<a href="electrodomesticos" class="btn btn-theme">Ver Productos</a>
                </div>
              </li>
              <li>
                <img src="img/slides/salcar-ve-2.jpg" alt="" />
                <div class="flex-caption derecha">
                    <h3>OLLAS Y SARTENES</h3> 
					<p>Variedad en ollas, sartenes, planchas, Woks, entre otros.</p> 
					<a href="ollas-sartenes" class="btn btn-theme">Ver más</a>
                </div>
              </li> 
              <li>
                <img src="img/slides/salcar-ve-3.jpg" alt="" />
                <div class="flex-caption derecha">
                    <h3>VAJILLAS</h3> 
					<p>Redondeadas, Cuadradas, en Porcelana.</p> 
					<a href="vajillas" class="btn btn-theme">Ver Productos</a>
                </div>
              </li>
                         
            <!--        
            <li>
                <img src="img/slides/vzla-1024x360.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Lorem ipsum</h3> 
					<p>fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p> 
					<a href="ollas-sartenes" class="btn btn-theme">Lorem</a>
                </div>
              </li>
            -->
            <!--
              <li>
                <img src="img/slides/slider-1.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Vajillas</h3> 
					<p>Redondeadas, Cuadradas, en Porcelana.</p> 
					<a href="vajillas" class="btn btn-theme">Ver Vajillas</a>
                </div>
              </li>
          	-->              
            </ul>
        </div>
	<!-- end slider -->
			</div>
		</div>
	</div>	
	
	

	</section>
	<!--
	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
						<h2><span>Moderna</span> HTML Business Template</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	-->
	<section id="content">
	<div class="container">
	<!--
	<div class="row">
        <div class="col-sm-12">
            <div class="owl-carousel">               
                <img class="owl-lazy" style="width:100%;" src="img/slides/slider-ve.jpg" alt="">
                <img class="owl-lazy" style="width:100%;" src="img/slides/vzla-1024x360.jpg" alt="">
                <img class="owl-lazy" style="width:100%;" src="img/slides/slider-ve.jpg" alt="">
                <img class="owl-lazy" style="width:100%;" src="img/slides/vzla-1024x360.jpg" alt="">                
                <img class="owl-lazy" style="width:100%;" src="img/slides/slider-ve.jpg" alt="">
                <img class="owl-lazy" style="width:100%;" src="img/slides/vzla-1024x360.jpg" alt="">
                <img class="owl-lazy" style="width:100%;" src="img/slides/slider-ve.jpg" alt="">
                <img class="owl-lazy" style="width:100%;" src="img/slides/vzla-1024x360.jpg" alt="">
            </div>
        </div>
    </div>
    <script type="text/javascript">
	$('.owl-carousel').owlCarousel({
	    items: 4,
	    lazyLoad: true,
	    loop: true,
	    margin: 10,
	    autoPlay: true
	});
	</script>
	-->
		<?php brands(); ?>
		<!--
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Electrodomésticos</h4>
								<div class="">
								<a target="_blank" href="archive/catalogo-salcar-2015-electrodomesticos-es.pdf"><img src="img/productos/producto-electrodomestico.jpg"></a>		
								</div>							
							</div>							
						</div>
					</div>
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Ollas y Sartenes</h4>
								<div class="">
								<a target="_blank" href="archive/catalogo-salcar-2015-ollas-es.pdf"><img src="img/productos/producto-olla-2.jpg"></a>	
								</div>
							</div>							
						</div>
					</div>					
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Vajillas</h4>
								<div class="">
								<a target="_blank" href="archive/catalogo-salcar-2015-vajillas-es.pdf"><img src="img/productos/producto-vajilla.jpg"></a>
								</div>
							</div>							
						</div>
					</div>
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Todos</h4>
								<div class="">
								<a target="_blank" href="catalogo"><img src="img/productos/producto-otros.jpg"></a>
								</div>
							</div>							
						</div>
					</div>					
				</div>
			</div>
		</div>
		-->

		<div class="row">
			<div class="col-lg-12">
				<h4 class="heading">Productos</h4>
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
								<a class="hover-wrap" data-fancybox-group="gallery" title="Todos los Productos" href="catalogo" data-desc="">
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
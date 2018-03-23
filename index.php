<?php $buscador=1; include 'header.php'; ?>

		
		<!--================================SERVICES SECTION==========================================-->

		
		<section class="categories-section padding-top-10 padding-bottom-10">
			<div class="container"><!-- section container -->
				
				<div class="section-title-wrap margin-bottom-10"><!-- section title -->
					<h4>Búsqueda en Seccciones Destacadas</h4>
					<div class="title-divider">
						<div class="line"></div>
						<i class="fa fa-cog"></i>
						<div class="line"></div>
					</div>
				</div><!-- section title end -->

			</div>
		</section>



				
		<!--================================SOCIAL CAROUSEL SECTION==========================================-->
		
		<section class="social-section padding-bottom-20">
			<div class="container-fluid"><!-- section container -->
				<div class="social-wrap style-1">
					
					<ul class="social-slider clearfix">
						
						<li class="item">
							<a class="bggray black shadow-1 padding-bottom-10" href="#"><i class="fa fa-road fa-2"></i>
								<h6>Red Vial</h6>
							</a>
						</li><!-- .ITEM -->

						<li class="item">
							<a class="bggray black shadow-1 padding-bottom-10" href="#"><i class="fa fa-building-o fa-2"></i>
								<h6>Edificios</h6>
							</a>
						</li><!-- .ITEM -->

						<li class="item">
							<a class="bggray black shadow-1 padding-bottom-10" href="#"><i class="fa fa-ship fa-2"></i>
								<h6>Puertos</h6>
							</a>
						</li><!-- .ITEM -->


						<li class="item">
							<a class="bggray black shadow-1 padding-bottom-10" href="#"><i class="fa fa-plane fa-2"></i>
								<h6>Aeropuertos</h6>
							</a>
						</li><!-- .ITEM -->

						
						

						<li class="item">
							<a class="bggray black shadow-1 padding-bottom-10" href="#"><i class="fa fa-lightbulb-o fa-2"></i>
								<h6>Energía</h6>
							</a>
						</li><!-- .ITEM -->

						<li class="item">
							<a class="bggray black shadow-1 padding-bottom-10" href="#"><i class="fa fa-tint fa-2"></i>
								<h6>Agua</h6>
							</a>
						</li><!-- .ITEM -->


						<li class="item">
							<a class="bggray black shadow-1 padding-bottom-10" href="#"><i class="fa fa-signal fa-2"></i>
								<h6>Telecomunicaciones</h6>
							</a>
						</li><!-- .ITEM -->

						<li class="item">
							<a class="bggray black shadow-1 padding-bottom-10" href="#"><i class="fa fa-puzzle-piece fa-2"></i>
								<h6>Centros Recreativas</h6>
							</a>
						</li><!-- .ITEM -->

						<div data-background-icon='&#xf086;'></div>



					</ul>
				</div>
			</div><!-- container end -->
		</section>

		
				

		<!--================================FUNFACTS COUNTER SECTION==========================================-->
		
		<?php //include 'totales_query.php'; ?>
		<section id="funfact" class=" padding-top-50 padding-bottom-30" >
			<div class="container">
				<div class="row padding-bottom-20" id="funfact-1">
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 margin-bottom-30 text-center clearfix">
						<div class="funfact-1 color-1  clearfix">
							<div class="fun-wrap">
								<div class="count2"><?php echo $tot1; ?></div>
								<div class="funfact-divider"></div>
								<div class="funfact"><p> Proyectos Publicados</p></div>
							</div>
						</div>
					</div><!-- /.col-md-3 col -->
					
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 margin-bottom-30 text-center clearfix">
						<div class="funfact-1 color-1  clearfix">
							<div class="fun-wrap">
								<div class="count2">4</div>
								<div class="funfact-divider"></div>
								<div class="funfact"><p> Entidades Divulgando Información</p></div>
							</div>
						</div>
					</div><!-- /.col-md-3 col -->  				
					
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 margin-bottom-30 text-center clearfix">
						<div class="funfact-1 color-1  clearfix">
							<div class="fun-wrap">
								<div class="count2"> L <?php echo round($tot2/1000000); ?></div>
								<div class="funfact-divider"></div>
								<div class="funfact"><p> Millones Totales de Inversión</p></div>
							</div>
						</div>
					</div><!-- /.col-md-3 col -->
					
				</div><!-- /#funfact-1 -->
			</div><!-- container end -->
		</section>
		



		



		<section class="partner-section padding-top-40 padding-bottom-20">
			<div class="container"><!-- section container -->
				<div class="section-title-wrap margin-bottom-20"><!-- section title -->
					<h4>entidades de adquisición</h4>
					<div class="title-divider">
						<div class="line"></div>
						<i class="fa fa-cog"></i>
						<div class="line"></div>
					</div>
				</div><!-- section title end -->


			</div><!-- container end -->
		</section>

				
		<!--================================SOCIAL CAROUSEL SECTION==========================================-->
		
		<?php include 'array_instituciones.php'; ?>
		<section class="social-section padding-bottom-20">
			<div class="container-fluid"><!-- section container -->
				<div class="social-wrap style-1">
					
					<ul class="social-slider clearfix">
						<li class="item">
							<a href="#">
								<img src="images/Entidad-sisocsapp.jpg" alt="">
							</a>
						</li>
						<?php foreach($instituciones as $x => $x_value) { ?>
						<li class="item">
							<a href="https://<?php echo $x_value; ?>.sisocs.org/" target="blank">
								<img src="images/Entidad-<?php echo $x_value; ?>.jpg" alt="partner"/>
							</a>
						</li><!-- .ITEM -->
						<?php } ?>
						
						<div data-background-icon='&#xf086;'></div>

					</ul>
				</div>
			</div><!-- container end -->
		</section>
	
		
<?php include 'footer.php'; ?>
		
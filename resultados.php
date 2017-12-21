<?php include 'header.php'; ?>

		<?php include 'query.php'; ?>


		<!--================================PAGE TITLE==========================================-->
		<div class="page-title-wrap bgamarillo padding-top-30 padding-bottom-30"><!-- section title -->
			<!-- <h4 class="white">Resultados de Busqueda </h4> -->
			<?php echo $registros; ?>
		</div><!-- section title end -->
		
		<!--================================listing SECTION==========================================-->
		
		<section class="aside-layout-section padding-top-70 padding-bottom-40">
			<div class="container"><!-- section container -->
				<div class="row"><!-- row -->
					

					<div class="col-md-9 col-sm-8 col-xs-12 main-wrap"><!-- content area column -->
						<div class="listing-single padding-bottom-40">


							
							<!--
							
							<div class="entry-wrap shadow-1">
								

								<div class="entry-content">
									<div class="entry-title">
										<h4>Take me out of country</h4>
									</div>
									
									<div class="entry-disc">
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex consequat Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
										</p>
									</div>
									<div class="entry-readmore">
										<a class="white bgblue-1" href="single.html">Read More</a>
									</div>
								</div>

							</div>

							 -->

							 <?php echo $texto; ?>



							
						



						</div>
					</div><!-- content area end -->
					

					<?php include 'sidebar.php'; ?>


				</div>
			</div><!-- section container end -->
		</section>
		
		
		
		
<?php include 'footer.php'; ?>
		
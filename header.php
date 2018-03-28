<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="user-scalable = yes" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Información y Seguimiento de Obras y contratos en Honduras">
	<meta name="keywords" content="contratos, gobierno honduras, supervisión, gobierto abierto, datos abiertos">
	<meta name="author" content="SISOCS">
	
	<title>SISOCS - SISTEMA DE INFORMACIÓN Y SEGUIMIENTO DE OBRAS Y CONTRATOS DE SUPERVISIÓN</title>
	
    <!--================================FAVICON================================-->
	
	
	<link rel="shortcut icon" href="images/favicon/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	

	<link rel="apple-touch-icon" sizes="60x60" href="images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
	<link rel="manifest" href="images/manifest.json">
	<link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">
	
    <!--================================BOOTSTRAP STYLE SHEETS================================-->
        
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	
    <!--================================ Main STYLE SHEETs====================================-->
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/color/color.css">
	<link rel="stylesheet" type="text/css" href="assets/testimonial/css/style.css" />
	<link rel="stylesheet" type="text/css" href="assets/testimonial/css/elastislide.css" />
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<!--================================FONTAWESOME==========================================-->
		
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        
	<!--================================GOOGLE FONTS=========================================-->
	<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Lato:300,400,700,900'>  
		
	<!--================================SLIDER REVOLUTION =========================================-->
	
		
</head>
<body>



	<div class="preloader"><span class="preloader-gif"></span></div>
	<div class="theme-wrap clearfix">
		<!--================================responsive log and menu==========================================-->
		<div class="wsmenucontent overlapblackbg"></div>
		<div class="wsmenuexpandermain slideRight">
			<a id="navToggle" class="animated-arrow slideLeft"><span></span></a>
			<a href="/" class="smallogo"><img src="images/logo.png" width="120" alt="" /></a>				

		</div>
		<!--================================HEADER==========================================-->
		<div class="header">
			



			<div class="nav-wrapper "><!--main navigation-->
				<div class="container ">
					<!--Main Menu HTML Code-->
					<nav class="wsmenu slideLeft clearfix ">
						<div class="logo pull-left"><a href="/" title="Responsive Slide Menus"><img src="images/logo.png" alt="" /></a>

							<a href="#">
								<img src="images/Entidad-sisocsapp.jpg" width="100" alt="">
							</a>
		
						</div>
						<ul class="mobile-sub wsmenu-list pull-right">
							<li><a href="/" class="">Inicio</a>
							</li>
							<li><a href="#" class="">Entidades</a>
								<ul class="wsmenu-submenu">
									<?php 
									include 'array_instituciones.php'; 
									foreach($instituciones as $x => $x_value) { 
									?>
										<li>
											<a href="https://<?php echo $x_value; ?>.sisocs.org/" target="blank">
												<?php echo $x; ?>
											</a>
										</li>
									<?php } ?>
								</ul>
							</li>

							<li><a href="#" class="">Documentos</a>
								<ul class="wsmenu-submenu">
									<li><a href="/docs/manual_sisocs.pdf" target="blank">Manual de Usuario</a></li>
									<li><a href="/docs/decreto_sisocs.pdf" target="blank">Decreto Ejecutivo SISOCS</a></li>
									
								</ul>
							</li>


							<li><a href="preguntas-frecuentes.php">Preguntas Frecuentes <span class="arrow"></span></a></li>
							
							<!--
						  	<li><a href="contacto.php">Contáctenos <span class="arrow"></span></a></li>
						  	-->


						  	
						</ul>

					</nav>
				</div>
			</div><!--main navigation end-->
		</div><!-- header end -->

				

		<?php 
		if (isset($buscador)) {
			include 'buscador.php';
		}
		?>
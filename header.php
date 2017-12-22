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
						<div class="logo pull-left"><a href="/" title="Responsive Slide Menus"><img src="images/logo.png" alt="" /></a></div>
						<ul class="mobile-sub wsmenu-list pull-right">
							<li><a href="/" class="">Inicio</a>
							</li>
							<li><a href="#" class="">Entidades</a>
								<ul class="wsmenu-submenu">
									<li><a href="https://fondovial.sisocs.org/index.php?r=Ciudadano/index" target="blank">Fondo Vial</a></li>
									<li><a href="https://invest.sisocs.org/index.php?r=Ciudadano/index" target="blank">InvestH</a></li>
									<li><a href="https://insep.sisocs.org/index.php?r=Ciudadano/index" target="blank">INSEP</a></li>
									<li><a href="https://enp.sisocs.org/index.php?r=Ciudadano/index" target="blank">ENP</a></li>
								</ul>
							</li>

							<li><a href="#" class="">Documentos</a>
								<ul class="wsmenu-submenu">
									<li><a href="/docs/manual_sisocs.pdf" target="blank">Manual de Usuario</a></li>
									<li><a href="/docs/decreto_sisocs.pdf" target="blank">Decreto Ejecutivo SISOCS</a></li>
									
								</ul>
							</li>


							<li><a href="#">Preguntas Frecuentes <span class="arrow"></span></a></li>
							
						  	<li><a href="#">Contáctenos <span class="arrow"></span></a></li>
						</ul>
					</nav>
				</div>
			</div><!--main navigation end-->
		</div><!-- header end -->
		
		<!--================================ STATIC HEADER SECTION==========================================-->
		
		<section class="static-section">
			<div class="container">
				<div class="static-header-content">
					<div class="static-header-text">
						<h4 class="white">Bienvenidos al   </h4>
						<h4 class="white margin-bottom-60"><span class="blue-1">Sistema de Información y Seguimiento  de Obras y Contratos de Supervisión</span></h4>
					</div>

			<?php 
			ini_set('display_errors', true);
			
			if($_POST['palabras']){
				$busqueda = trim($_POST['palabras']);
			}else{
				$busqueda ="";
			}


			if($_POST['entidad']){
				$entidad0 = trim($_POST['entidad']);
			}else{
				$entidad0 ="Todas las Entidades";
			}

			?>		
			<div class="container ">
				<div class="search-form-wrap">
					<form class="clearfix" action="resultados.php" method="POST">
						<div class="input-field-wrap pull-left">
							<input class="search-form-input" name="palabras" placeholder="Ingrese texto a buscar..."  value="<?php echo $busqueda; ?>" type="text"/>
						</div>
						<div class="select-field-wrap pull-left">
							<select class="search-form-select" name="municipio" >
								<option class="options" value="1">Todos Los Municipios</option>
								<option class="options" value="2">Cortés</option>
								<option class="options" value="3">Francisco Morazán</option>
								<option class="options" value="4">Comayagua</option>
								<option class="options" value="5">Choluteca</option>
								<option class="options" value="6">Copán</option>
								<option class="options" value="7">Santa Bárbara</option>
							</select>
						</div>
						<div class="select-field-wrap pull-left">


							<select class="search-form-select" name="entidad">
							<?php
							$entidades = array('Todas las Entidades', 'ENP', 'INSEP','HONDUTEL');
							$current_entidad = $entidad0;

							foreach($entidades as $entidad) {
							    if($entidad == $current_entidad) {
							        echo '<option selected="selected">'.$entidad.'</option>';
							    } else {
							        echo '<option>'.$entidad.'</option>';
							    }
							}
							?>
							</select>

							<!--

							<select class="search-form-select" name="entidad" >
								<option class="options" value="1">Todas las Entidades</option>
								<option class="options" value="2">ENP</option>
								<option class="options" value="3">INSEP</option>
								<option class="options" value="4">HONDUTEL</option>
								<option class="options" value="5">Fondo Vial</option>
								<option class="options" value="6">wordpress</option>
								<option class="options" value="7">bootstrap</option>
							</select>

							-->

						</div>
						<div class="submit-field-wrap pull-left">
							<input class="search-form-submit bgblack white" name="boton" type="submit" value="Buscar" />
						</div>
					</form>
				</div>
			</div>
					
				
				</div>
			</div>

			</section>
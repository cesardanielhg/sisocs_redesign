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
			if($_POST){
				$busqueda = trim($_POST['palabras']);
				$entidad0 = trim($_POST['entidad']);
			}
			if (empty($busqueda)){
				$busqueda ="";
			}
			if (empty($entidad0)){
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
								<option class="options" value="1">Todos los departamentos</option>
								<option class="options" value="2">Atlántida</option>
								<option class="options" value="3">Colón</option>
								<option class="options" value="4">Comayagua</option>
								<option class="options" value="5">Copán</option>
								<option class="options" value="6">Cortés</option>
								<option class="options" value="7">Choluteca</option>
								<option class="options" value="8">El Paraíso</option>					
								<option class="options" value="9">Francisco Morazán</option>
								<option class="options" value="10">Gracias a Dios</option>
								<option class="options" value="11">Intibucá</option>
								<option class="options" value="12">Islas de la Bahía</option>
								<option class="options" value="13">La Paz</option>
								<option class="options" value="14">Lempira</option>
								<option class="options" value="15">Ocotepeque</option>
								<option class="options" value="16">Olancho</option>
								<option class="options" value="17">Santa Bárbara</option>
								<option class="options" value="18">Valle</option>
								<option class="options" value="19">Yoro</option>			
							</select>
						</div>
						<div class="select-field-wrap pull-left">


							<select class="search-form-select" name="entidad">
							<?php
							include 'array_instituciones.php'; 
							//$entidades = array('Todas las entidades', 'FondoVial', 'InvestH','INSEP','ENP');
							$current_entidad = strtoupper($entidad0);
							foreach($instituciones as $x => $entidad) { 
							//foreach($entidades as $entidad) {
							    if(strtoupper($entidad) == $current_entidad) {
							        echo '<option selected="selected">'. strtoupper($entidad).'</option>';
							    } else {
							        echo '<option>'. strtoupper($entidad).'</option>';
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
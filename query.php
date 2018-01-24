<?php
ini_set('display_errors', true);

//global $tabla;

$tabla= "sisocs_".strtolower($current_entidad);
//echo $current_entidad;
$dominio= $current_entidad;
//$tabla= "sisocs_fondovial";

/*
if($current_entidad == "FondoVial") {
	$tabla= "sisocs_fondovial";
	$dominio= "fondovial";
} elseif ($current_entidad == "InvestH") {
	$tabla= "sisocs_invest";
	$dominio= "invest";
} elseif ($current_entidad == "INSEP") {
	$tabla= "sisocs_insep";
	$dominio= "insep";
} elseif ($current_entidad == "ENP") {
	$tabla= "sisocs_enp";
	$dominio= "enp";
}else{
	$tabla= "sisocs_fondovial";
	$dominio= "fondovial";
}
*/


// Definimos la conexión
function conectar(){
	global $tabla;
	global $conexion;  //Definición global para poder utilizar en todo el contexto
	//$conexion = mysqli_connect("localhost", "costdev", "c98td3v", $tabla)
	$conexion = mysqli_connect("localhost", "root", "root", $tabla)
	or die ('NO SE HA PODIDO CONECTAR AL MOTOR DE LA BASE DE DATOS');	
}

function desconectar(){
	global $conexion;
	mysqli_close($conexion);
}

//Variable que contendrá el resultado de la búsqueda
$texto = '';
//Variable que contendrá el número de resgistros encontrados
$registros = '';

if($_POST){
	
  //$busqueda = $palabras;

  $entero = 0;
  
  if (empty($busqueda)){
	  $texto = 'Búsqueda sin resultados';
  }else{
	  // Si hay información para buscar, abrimos la conexión
	  conectar();
      //mysqli_set_charset('utf8');  // mostramos la información en utf-8

      if (!mysqli_set_charset($conexion, "utf8")) {
		    printf("Error loading character set utf8: %s\n", mysqli_error($link));
		    exit();
		} else {
		    //printf("Current character set: %s\n", mysqli_character_set_name($conexion));
		}

	  //Contulta para la base de datos, se utiliza un comparador LIKE para acceder a todo lo que contenga la cadena a buscar
	  $sql = "SELECT * FROM cs_proyecto WHERE codigo LIKE '%" .$busqueda. "%' OR nombre_proyecto LIKE '%" .$busqueda. "%' ORDER BY idProyecto";
	  $busqueda = mysqli_real_escape_string($conexion, $busqueda);
	  $resultado = mysqli_query($conexion,$sql); //Ejecución de la consulta
      //Si hay resultados...
	  if (mysqli_num_rows($resultado) > 0){ 
	     // Se recoge el número de resultados
		 $registros = "<h4 class='white'>Se Encontraron ". mysqli_num_rows($resultado) ." Resultados de Busqueda</h4>";
	     // Se almacenan las cadenas de resultado
		 $c=0;
		 while($fila = mysqli_fetch_assoc($resultado)){ 
              $c = $c + 1;
              $texto .= 
              			"
							<div class='entry-wrap shadow-1'>								

								<div class='entry-content'>
									<div class='entry-disc'>
										<p>Resultado No. ".(string)$c."</p>
									</div>
									<div class='entry-title'>
										<h4>".$fila['codigo']."</h4>
									</div>
									
									<div class='entry-disc'>
										<p>".$fila['nombre_proyecto']."</p>
									</div>
									<div class='entry-readmore'>
										<a class='white bgblue-1' href='https://".$dominio.".sisocs.org/index.php?r=ciudadano/PreFichaTecnica&id=".(string)$fila['idProyecto']."'>
											Ver detalles..
										</a>
									</div>
								</div>

							</div>";

			 }
	  
	  }else{
  			$registros = //" <span>>>Texto:". $busqueda. " / Municipio;".$."</span></br>"
  			"<h4 class='white'>No Se Encontraron Resultados de Busqueda</h4>";
		   $texto = "No Hay resultados en la Base de Datos con los parámetros de búsqueda proporcionados.";	
	  }
	  // Cerramos la conexión (por seguridad, no dejar conexiones abiertas)
	  mysqli_close($conexion);
  }
}
?>
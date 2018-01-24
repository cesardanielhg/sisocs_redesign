<style>
body {
  font-family: "Open Sans", sans-serif;
  line-height: 1.25;
}
table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}
table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}
table tr {
  background: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}
table th,
table td {
  padding: .625em;
  text-align: center;
}
table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}
@media screen and (max-width: 600px) {
  table {
    border: 0;
  }
  table caption {
    font-size: 1.3em;
  }
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  table td:before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  table td:last-child {
    border-bottom: 0;
  }
}
 table thead {background: yellow;}
 tbody tr:nth-child(odd) {
  background: lightgray;
}
</style>
<?php $buscador=1; include 'header.php';  ?>

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




							<table>
							  <caption>Resultados de Búsqueda</caption>
							  <thead>
							    <tr>
							      <th scope="col">Número Resultado</th>
							      <th scope="col">Nombre Documento</th>
							      <th scope="col">Descripción</th>
							      <th scope="col">Entidad</th>
							    </tr>
							  </thead>
							  <tbody>
							    <tr>
							      <td data-label="Número Resultado">Visa - 3412</td>
							      <td data-label="Nombre Documento">04/01/2016</td>
							      <td data-label="Descripción">$1,190</td>
							      <td data-label="Entidad">03/01/2016 - 03/31/2016</td>
							    </tr>

							     <tr>
							      <td data-label="Número Resultado">Visa - 3412</td>
							      <td data-label="Nombre Documento">04/01/2016</td>
							      <td data-label="Descripción">$1,190</td>
							      <td data-label="Entidad">03/01/2016 - 03/31/2016</td>
							    </tr>

							     <tr>
							      <td data-label="Número Resultado">Visa - 3412</td>
							      <td data-label="Nombre Documento">04/01/2016</td>
							      <td data-label="Descripción">$1,190</td>
							      <td data-label="Entidad">03/01/2016 - 03/31/2016</td>
							    </tr>
							   
							   
							  </tbody>
							</table>




						</div>
					</div><!-- content area end -->
					

					<?php include 'sidebar.php'; ?>


				</div>
			</div><!-- section container end -->
		</section>
		
		
		
		
<?php include 'footer.php'; ?>
		
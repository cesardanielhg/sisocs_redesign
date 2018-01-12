				<div class="col-md-3 col-sm-4 col-xs-12"><!-- sidebar column -->
						<div class="sidebar sidebar-wrap">
							

							<div class="sidebar-widget shadow-1">
								<div class="sidebar-widget-title">
									<h5><span class="bgyallow-1"></span>Entidades</h5>
								</div>
								<div class="sidebar-widget-content recent-post clearfix">
									

									<div class="recent-post-entry clearfix">
										
										<div class="recent-entry-content">
											<?php 
											include 'array_instituciones.php'; 
											foreach($instituciones as $x => $x_value) { 
											?>
											<p class="recent-entry-title">
												<a href="https://<?php echo $x_value; ?>.sisocs.org/" target="blank">
													<?php echo $x; ?>
												</a>
											</p>
											<?php } ?>
											

										</div>
									</div>
									
									

								</div>
							</div>
							
							

						</div>
					</div>	
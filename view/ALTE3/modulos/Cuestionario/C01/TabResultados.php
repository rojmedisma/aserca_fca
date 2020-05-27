<!-- tab_resultados -->
<h4>Resultados globales de la autoevaluación de los centros de acopio</h4>
<div class="callout callout-info">
<p>A continuación se mostrará  los resultados alcanzados en cada uno de los componentes que integran la operación  adecuado de un centro de acopio.</p>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="card card-primary card-outline card-tabs">
			<div class="card-header p-0 pt-1">
				<ul class="nav nav-tabs" id="tab_resultado" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="tab_res_grafica_tab" data-toggle="pill" href="#tab_res_grafica" role="tab" aria-controls="tab_res_grafica" aria-selected="true">Gráfica</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="tab_res_tabla_tab" data-toggle="pill" href="#tab_res_tabla" role="tab" aria-controls="tab_res_tabla" aria-selected="false">Tabla</a>
					</li>
				</ul>
			</div><!-- /.card-header -->
			<div class="card-body">
				<div class="tab-content" id="tab_resultado_cont">
					<div class="tab-pane fade show active" id="tab_res_grafica" role="tabpanel" aria-labelledby="tab_res_grafica_tab">
						<!-- Gráfica -->
						<h5>Resultados de la autoevaluación</h5>
						<div class="card">
							<div class="card-body">
								<div id="chartdiv" class="chart_div"></div>
							</div>
						</div> 
					</div>
					<div class="tab-pane fade show" id="tab_res_tabla" role="tabpanel" aria-labelledby="tab_res_tabla_tab">
						<!-- Cuadro -->
						<h5>Resultados de la autoevaluación</h5>
						<div class="row">
							<div class="col-sm-12 col-md-10">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Indicador general</h3>
									</div>
									<div class="card-body p-0">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th>Componente</th>
													<th>Valoración</th>
													<th>Valor máximo por componente</th>
													<th>Valor obtenido por componente</th>
													<th>% del Valor Obtenido</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($controlador_obj->getArrResIndicador() as $arr_res_det){
													$componente = (isset($arr_res_det['cat_cuest_modulo']['descripcion']))? $arr_res_det['cat_cuest_modulo']['descripcion'] : "";
													$valoracion_tot = (isset($arr_res_det['cat_cuest_modulo']['valoracion_tot']))? $arr_res_det['cat_cuest_modulo']['valoracion_tot']: "";
													$valor_maximo = (isset($arr_res_det['cat_cuest_modulo']['valor_maximo']))? $arr_res_det['cat_cuest_modulo']['valor_maximo'] : "";
													$valor_x_cmpte = (isset($arr_res_det['cat_cuest_modulo']['valor_x_cmpte']))? $arr_res_det['cat_cuest_modulo']['valor_x_cmpte'] : "";
													$porcentaje = (isset($arr_res_det['cat_cuest_modulo']['porcentaje']))? $arr_res_det['cat_cuest_modulo']['porcentaje'] : "";
												?>
												<tr>
													<td><?php echo $componente; ?></td>
													<td class="text-right"><?php echo formato_miles($valoracion_tot,2); ?></td>
													<td class="text-right"><?php echo $valor_maximo; ?></td>
													<td class="text-right"><?php echo formato_miles($valor_x_cmpte,2); ?></td>
													<td class="text-right"><?php echo formato_miles($porcentaje,2); ?></td>
												</tr>
												<?php }?>
											</tbody>
										</table>
									</div><!-- /.card-body -->
								</div><!-- /.card -->
									
							</div>
						</div>
					</div>
				</div><!-- /.tab-content -->
			</div><!-- /.card-body -->
		</div>
	
					
					
	</div>
</div>
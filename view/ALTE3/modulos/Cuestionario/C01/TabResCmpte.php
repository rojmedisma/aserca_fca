<!-- tab_res_cmpte -->
	<h4>Resultados de elementos que integran cada componente</h4>
	<div class="callout callout-info">
		<p>A continuación, se muestra los resultados de cada componente a detalle, en estas gráficas se reflejan que elementos o aspectos deben fortalecerse al interior de cada componente. Revise a detalle que elementos o aspectos se deben mejorar.</p>
	</div>
	<?php foreach ($controlador_obj->getArrResIndicador() as $arr_ri_det){?>
		<?php
		$arr_cat_cuest_modulo = $arr_ri_det['cat_cuest_modulo'];
		$cat_cuest_modulo_id = $arr_cat_cuest_modulo['cat_cuest_modulo_id'];
		$cat_cuest_modulo_desc = $arr_cat_cuest_modulo['descripcion'];
		?>
	<div class="card">
		<div class="card-header">
			<h5 class="card-title m-0"><?php echo $cat_cuest_modulo_desc; ?></h5>
		</div>
		<div class="card-body">
			<div id="chartdiv_ccm<?php echo $cat_cuest_modulo_id;?>" class="chart_div"></div>
		</div>
	</div>
	<?php }?>
	<div class="callout callout-info">
		<h5>¿Qué significan estas gráficas?</h5>
		<p>Mientras más cerca del 100% se ubiquen los elementos evaluados de su centro de acopio - es decir se encuentre más cerca de la orilla de la red-; más fortalecido estarán los componentes, dado que cuentan con procesos, instrumentos, personas, trabajando los componentes adecuadamente.</p>
		<p>Si los elementos evaluados del centro de acopio se reflejan más al centro de la red, quiere decir que estos están más débiles, que requieren ser fortalecidos, ya sea incorporando buenas prácticas, procesos, procedimientos, adopción de instrumentos, capacitándose o designando personas que trabajen en ellos para su cumplimiento.</p>
	</div>
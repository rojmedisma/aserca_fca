<!-- Para el forumlario / Cuestionario -->
	<!-- Select2 -->
	<script src="/<?php echo DIR_LOCAL; ?>/library/ALTE3/plugins/select2/js/select2.full.min.js"></script>
	<!-- jQuery Numeric -->
	<script src="/<?php echo DIR_LOCAL; ?>/library/ALTE/plugins/jQuery/jquery.numeric.min.js"></script>
	<!-- date-range-picker -->
	<script src="/<?php echo DIR_LOCAL; ?>/library/ALTE3/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- amCharts -->
	<script src="/<?php echo DIR_LOCAL; ?>/library/amcharts4/amcharts/core.js"></script>
	<script src="/<?php echo DIR_LOCAL; ?>/library/amcharts4/amcharts/charts.js"></script>
	<script src="/<?php echo DIR_LOCAL; ?>/library/amcharts4/amcharts/themes/animated.js"></script>
	<!-- assets -->
	<script src="/<?php echo DIR_LOCAL; ?>/assets/js/Forma.js"></script>
	<script src="/<?php echo DIR_LOCAL; ?>/assets/js/FormaC01Mod1.js"></script>
	<script type="text/javascript">
	var v_cat_cuest_modulo_id = '<?php echo $controlador_obj->getCatCuestModuloId(); ?>';
	var v_ver_res_gen = '<?php echo intval($controlador_obj->ver_res_gen); ?>';
	var o_res_indicador = <?php echo json_encode($controlador_obj->getArrResIndicador()); ?>;
	$(document).ready(function(){
		Forma.activaCmpEventos();
		Forma.activaFormaEventos(v_cat_cuest_modulo_id, v_ver_res_gen, o_res_indicador);
		FormaC01Mod1.activar(v_cat_cuest_modulo_id);
	});
	</script>

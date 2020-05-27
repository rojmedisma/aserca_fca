<!-- Campos necesarios para realizar para el controlador Cuestionario -->
<input type="hidden" name="cat_cuestionario_id" id="cat_cuestionario_id" value="<?php echo $controlador_obj->getCatCuestionarioId(); ?>">
<input type="hidden" name="cuestionario_id" id="cuestionario_id" value="<?php echo $controlador_obj->getCuestionarioId(); ?>">
<input type="hidden" name="cat_cuest_modulo_id" id="cat_cuest_modulo_id" value="<?php echo $controlador_obj->getCatCuestModuloId(); ?>">
<!-- Campos que son almacenados dentro del arreglo json en el campo json_parametros  -->
<input type="hidden" name="p_es_modulo_activo" id="p_es_modulo_activo" value="<?php echo $controlador_obj->parametros_JSON->getValor("p_es_mod".$controlador_obj->getCatCuestModuloId()."_activo"); ?>">

<!-- tab_generales -->
	<h4>Datos Generales del Centro de Acopio</h4>
	<h5 class="text-secondary">I Datos de la organización</h5>
	<div class="row">
		<div class="col-md-4"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('persona_tipo', 'persona_tipo', array('lbl_txt'=>'Tipo de persona')); ?></div>
	</div>
	<div id="div_org">
		<div class="row">
			<div class="col-md-12"><?php echo $controlador_obj->tag_campo->cmpTexto('org_nombre',array('lbl_txt'=>'Nombre de la organización')); ?></div>
		</div>
		<div class="row">
			<div class="col-md-12"><?php echo $controlador_obj->tag_campo->cmpTexto('org_razon_soc',array('lbl_txt'=>'Razón social')); ?></div>
		</div>
	</div>
	<?php echo $controlador_obj->tag_campo->label('Nombre de la o el representante');?>
	<div class="row">
		<div class="col-md-4"><?php echo $controlador_obj->tag_campo->cmpTexto('repre_nombre',array('lbl_txt'=>'Nombre')); ?></div>
		<div class="col-md-4"><?php echo $controlador_obj->tag_campo->cmpTexto('repre_ap_paterno',array('lbl_txt'=>'Apellido')); ?></div>
		<div class="col-md-4"><?php echo $controlador_obj->tag_campo->cmpTexto('repre_ap_materno',array('lbl_txt'=>'Apellido')); ?></div>
	</div>
	<h5 class="text-secondary">II Datos de ubicación de la organización</h5>
	<div class="row">
		<div class="col-md-3"><?php echo $controlador_obj->tag_campo->cmpSelectDeTbl('ubica_estado', 'cat_estado', 'cat_estado_id', 'descripcion', '', array('lbl_txt'=>'Estado')) ?></div>
		<div class="col-md-3"><?php echo $controlador_obj->tag_campo->cmpSelectDeTbl('ubica_municipio', 'cat_municipio', 'cat_municipio_id', 'descripcion', $controlador_obj->and_estado, array('lbl_txt'=>'Municipio')) ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpTexto('ubica_localidad_desc',array('lbl_txt'=>'Localidad')); ?></div>
	</div>
	<h5 class="text-secondary">III Datos de contacto</h5>
	<div class="row">
		<div class="col-md-4"><?php echo $controlador_obj->tag_campo->cmpTexto('contacto_correo',array('lbl_txt'=>'Correo electrónico')); ?></div>
		<div class="col-md-4"><?php echo $controlador_obj->tag_campo->cmpTexto('contacto_telefono',array('lbl_txt'=>'Teléfono')); ?></div>
		<div class="col-md-4"><?php echo $controlador_obj->tag_campo->cmpTexto('contact_whapp',array('lbl_txt'=>'Num. para whapp')); ?></div>
	</div>
	<h5 class="text-secondary">IV Número de socios</h5>
	<div class="row">
		<div class="col-md-2"><?php echo $controlador_obj->tag_campo->cmpNum('socio_num_mujeres', 0, array('lbl_txt'=>'Mujeres')); ?></div>
		<div class="col-md-2"><?php echo $controlador_obj->tag_campo->cmpNum('socio_num_hombres', 0, array('lbl_txt'=>'Hombres')); ?></div>
		<div class="col-md-2"><?php echo $controlador_obj->tag_campo->cmpNum('socio_num_total', 0, array('lbl_txt'=>'Total')); ?></div>
	</div>
	<h5 class="text-secondary">V Inicio de operaciones</h5>
	<div class="row">
		<div class="col-md-2"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('ini_op_anio', 'ini_op_anio', array('lbl_txt'=>'Año')); ?></div>
		<div class="col-md-2"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('ini_op_mes', 'ini_op_mes', array('lbl_txt'=>'Mes')); ?></div>
	</div>
	<h5 class="text-secondary">VI Área de cobertura</h5>
	<div class="row">
		<div class="col-md-4"><?php echo $controlador_obj->tag_campo->cmpSelectDeTbl('cobertura_municipio', 'cat_municipio', 'cat_municipio_id', 'descripcion', '', array('lbl_txt'=>'Nombre del  Municipio donde brinda servicio')) ?></div>
		<div class="col-md-3"><?php echo $controlador_obj->tag_campo->cmpNum('cobertura_km', 0, array('lbl_txt'=>'Núm. Kilometros de cobertura')); ?></div>
	</div>

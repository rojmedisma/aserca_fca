<!-- tab_m06 (Pestaña 6, Módulo 7) -->
	<h5>Sexto componente de la autoevaluación.</h5>
	<h4>6. Evaluación financiera</h4>
	<h5 class="text-secondary">1. Recursos financieros</h5>
	<?php echo $controlador_obj->tag_campo->label('1. Recursos financieros');?>
	<div class="row">
		<div class="col-md-8"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m6p1', 'm6p1', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>$controlador_obj->getCuesCmpDef('m6p1','lbl_txt'))); ?></div>
	</div>
	<div class="row">
		<div class="col-md-8"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m6p2', 'm6p2', array('lbl_txt'=>$controlador_obj->getCuesCmpDef('m6p2','lbl_txt'))); ?></div>
	</div>
	<div class="row">
		<div class="col-md-8"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m6p3', 'm6p3', array('lbl_txt'=>$controlador_obj->getCuesCmpDef('m6p3','lbl_txt'))); ?></div>
	</div>
	<h5 class="text-secondary">2. Administración de riesgos</h5>
	<?php echo $controlador_obj->tag_campo->label('Polizas de aseguramiento');?>
	<div class="row">
		<div class="col-md-8"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m6p4', 'm6p4', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>$controlador_obj->getCuesCmpDef('m6p4','lbl_txt'))); ?></div>
	</div>
	<?php echo $controlador_obj->tag_campo->label('Evaluación de la actuación de los socios');?>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m6p5r1', 'm6p5r1', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>$controlador_obj->getCuesCmpDef('m6p5r1','lbl_txt'))); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m6p5r2', 'm6p5r2', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>$controlador_obj->getCuesCmpDef('m6p5r2','lbl_txt'))); ?></div>
	</div>
	<?php echo $controlador_obj->tag_campo->label('Seguridad de la instalación');?>
	<div class="row">
		<div class="col-md-8"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m6p6', 'm6p6', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>$controlador_obj->getCuesCmpDef('m6p6','lbl_txt'))); ?></div>
	</div>
	
	

	
	
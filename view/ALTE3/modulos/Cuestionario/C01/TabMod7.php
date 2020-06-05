<!-- tab_m06 (Pestaña 6, Módulo 7) -->
	<h5>Sexto componente de la autoevaluación.</h5>
	<h4>6. Evaluación financiera</h4>
	<h5 class="text-secondary">1. Recursos financieros</h5>
	
	
	<?php echo $controlador_obj->tag_campo->label('Obligaciones fiscales');?>
	<div class="row">
		<div class="col-md-8"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m6p1', 'm6p1', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>$controlador_obj->getCuesCmpDef('m6p1','lbl_txt'))); ?></div>
	</div>
	<div class="row">
		<div class="col-md-8"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m6p2', 'm6p2', array('lbl_txt'=>$controlador_obj->getCuesCmpDef('m6p2','lbl_txt'))); ?></div>
	</div>
	<div class="row">
		<div class="col-md-8"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m6p3', 'm6p3', array('lbl_txt'=>$controlador_obj->getCuesCmpDef('m6p3','lbl_txt'))); ?></div>
	</div>
	<div class="row">
		<div class="col-md-8"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m6p4', 'm6p4', array('lbl_txt'=>$controlador_obj->getCuesCmpDef('m6p4','lbl_txt'))); ?></div>
	</div>
	<?php echo $controlador_obj->tag_campo->label('Uso de la información financiera');?>
	<div class="row">
		<div class="col-md-8"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m6p5', 'm6p5', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>$controlador_obj->getCuesCmpDef('m6p5','lbl_txt'))); ?></div>
	</div>
	<h5 class="text-secondary">2. Estructura del área administrativa, financiera y contable</h5>
	<?php echo $controlador_obj->tag_campo->label('Personal de cada área');?>
	<div class="row">
		<div class="col-md-8"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m6p6', 'm6p6', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>$controlador_obj->getCuesCmpDef('m6p6','lbl_txt'))); ?></div>
	</div>
	<div class="row">
		<div class="col-md-8"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m6p7', 'm6p7', array('lbl_txt'=>$controlador_obj->getCuesCmpDef('m6p7','lbl_txt'))); ?></div>
	</div>
	<div class="row">
		<div class="col-md-8"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m6p8', 'm6p8', array('lbl_txt'=>$controlador_obj->getCuesCmpDef('m6p8','lbl_txt'))); ?></div>
	</div>
	<h5 class="text-secondary">3. Análisis de estados financieros</h5>
	<div class="row">
		<div class="col-md-8"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m6p9', 'm6p9', array('lbl_txt'=>$controlador_obj->getCuesCmpDef('m6p9','lbl_txt'))); ?></div>
	</div>
	<div class="row">
		<div class="col-md-8"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m6p10', 'm6p10', array('lbl_txt'=>$controlador_obj->getCuesCmpDef('m6p10','lbl_txt'))); ?></div>
	</div>
	<?php echo $controlador_obj->tag_campo->label('Estado de origen y aplicación de fondos');?>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m6p11r1', 'm6p11r1', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>$controlador_obj->getCuesCmpDef('m6p11r1','lbl_txt'))); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m6p11r2', 'm6p11r2', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>$controlador_obj->getCuesCmpDef('m6p11r2','lbl_txt'))); ?></div>
	</div>
	
	<h5 class="text-secondary">4. Historial crediticio</h5>
	<div class="row">
		<div class="col-md-8"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m6p12', 'm6p12', array('lbl_txt'=>$controlador_obj->getCuesCmpDef('m6p12','lbl_txt'))); ?></div>
	</div>
	<div class="row">
		<div class="col-md-8"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m6p13', 'm6p13', array('lbl_txt'=>$controlador_obj->getCuesCmpDef('m6p13','lbl_txt'))); ?></div>
	</div>
	<div class="row">
		<div class="col-md-8"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m6p14', 'm6p14', array('lbl_txt'=>$controlador_obj->getCuesCmpDef('m6p14','lbl_txt'))); ?></div>
	</div>
	<h5 class="text-secondary">5. Administración de riesgos</h5>
	<?php echo $controlador_obj->tag_campo->label('Concepto e identificación del riesgo');?>
	<div class="row">
		<div class="col-md-8"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m6p15', 'm6p15', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>$controlador_obj->getCuesCmpDef('m6p15','lbl_txt'))); ?></div>
	</div>
	<?php echo $controlador_obj->tag_campo->label('Apoyo e información documental');?>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m6p16r1', 'm6p16r1', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>$controlador_obj->getCuesCmpDef('m6p16r1','lbl_txt'))); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m6p16r2', 'm6p16r2', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>$controlador_obj->getCuesCmpDef('m6p16r2','lbl_txt'))); ?></div>
	</div>
	<?php echo $controlador_obj->tag_campo->label('Medición y evaluación de riesgos');?>
	<div class="row">
		<div class="col-md-8"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m6p17', 'm6p17', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>$controlador_obj->getCuesCmpDef('m6p17','lbl_txt'))); ?></div>
	</div>
	<?php echo $controlador_obj->tag_campo->label('Pólizas de aseguramiento');?>
	<div class="row">
		<div class="col-md-8"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m6p18', 'm6p18', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>$controlador_obj->getCuesCmpDef('m6p18','lbl_txt'))); ?></div>
	</div>
	
	
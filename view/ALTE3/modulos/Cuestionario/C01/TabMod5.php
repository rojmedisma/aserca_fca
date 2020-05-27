<!-- tab_m04 (Pestaña 4, Módulo 5) -->
	<h5>Cuarto componente de la autoevaluación.</h5>
	<h4>4 Gobierno corporativo</h4>
	<?php if($controlador_obj->getCampoValor("persona_tipo")=="1"){?>
	<h5 class="text-secondary">Tipo 1. Personas físicas</h5>
	<div class="row">
		<div class="col-md-8"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m4p1', 'm4p1', array('lbl_txt'=>$controlador_obj->getCuesCmpDef('m4p1','lbl_txt'))); ?></div>
	</div>
	<?php echo $controlador_obj->tag_campo->label('2. Transparencia. ¿En su centro de acopio realizan o llevan los siguientes instrumentos:');?>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m4p2r1', 'm4p2r1', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>$controlador_obj->getCuesCmpDef('m4p2r1','lbl_txt'))); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m4p2r2', 'm4p2r2', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>$controlador_obj->getCuesCmpDef('m4p2r2','lbl_txt'))); ?></div>
	</div>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m4p2r3', 'm4p2r3', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>$controlador_obj->getCuesCmpDef('m4p2r3','lbl_txt'))); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m4p2r4', 'm4p2r4', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>$controlador_obj->getCuesCmpDef('m4p2r4','lbl_txt'))); ?></div>
	</div>
	<div class="row">
		<div class="col-md-8"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m4p3', 'm4p3', array('lbl_txt'=>$controlador_obj->getCuesCmpDef('m4p3','lbl_txt'))); ?></div>
	</div>
	<?php }?>
	<?php if($controlador_obj->getCampoValor("persona_tipo")=="2"){?>
	<h5 class="text-secondary">Tipo 2. Personas morales (organizaciones)</h5>
	<?php echo $controlador_obj->tag_campo->label('1. Órganos representativos. ¿En su centro de acopio existen estos tipos de órganos: ');?>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m4p4r1', 'm4p4r1', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>$controlador_obj->getCuesCmpDef('m4p4r1','lbl_txt'))); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m4p4r2', 'm4p4r2', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>$controlador_obj->getCuesCmpDef('m4p4r2','lbl_txt'))); ?></div>
	</div>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m4p4r3', 'm4p4r3', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>$controlador_obj->getCuesCmpDef('m4p4r3','lbl_txt'))); ?></div>
	</div>
	<?php echo $controlador_obj->tag_campo->label('2. Control y gobierno. Su centro de acopio cuenta con estos elementos para apoyar la capacidad de gobernarse internamente');?>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m4p5r1', 'm4p5r1', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>$controlador_obj->getCuesCmpDef('m4p5r1','lbl_txt'))); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m4p5r2', 'm4p5r2', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>$controlador_obj->getCuesCmpDef('m4p5r2','lbl_txt'))); ?></div>
	</div>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m4p5r3', 'm4p5r3', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>$controlador_obj->getCuesCmpDef('m4p5r3','lbl_txt'))); ?></div>
	</div>
	<?php echo $controlador_obj->tag_campo->label('3. Transparencia. Su centro de acopio cuenta con estos elementos para brindar transparencia en su operación');?>
	<div class="row">
		<div class="col-md-8"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m4p6', 'm4p6', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>$controlador_obj->getCuesCmpDef('m4p6','lbl_txt'))); ?></div>
	</div>
	<?php }?>

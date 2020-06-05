<!-- Mensaje de sección finalizada -->
	<?php if(!$controlador_obj->esLectura()){?>
	<div class="row">
		<div class="col-md-8">
			<div class="alert alert-info alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h5><i class="icon fas fa-info"></i> Fin de sección</h5>
				<?php if($controlador_obj->getCatCuestModuloId()==1){?>
				<p>Usted acaba de concluir el llenado de los <strong>Datos Generales</strong>, de click en el cuadro de guardar y continúe respondiendo con las siguientes secciones.</p>
				<?php }else{?>
				<p>Usted acaba de concluir el llenado del componente <strong><?php echo $controlador_obj->getCmpCatCuestModuloVal('tit_largo')?></strong>, de click en el cuadro de <strong>Guardar y siguente</strong> y continúe respondiendo con las siguientes secciones.</p>
				<?php }?>
			</div>
		</div>
	</div>
	<?php }?>

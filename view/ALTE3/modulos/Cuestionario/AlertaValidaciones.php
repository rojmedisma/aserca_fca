<div class="row">
	<div class="col-md-12">
	<?php if($controlador_obj->esModuloActivo($controlador_obj->getCatCuestModuloId())){?>
		<?php if(count($controlador_obj->getArrTxtValidaciones())){?>
		<div class="callout callout-warning">
			<h5>Preguntas con observaciones:</h5>
			<ul>
			<?php
			foreach ($controlador_obj->getArrTxtValidaciones() as $arr_txt_det){
				if(!$controlador_obj->esLectura()){
			?>
			<li><a class="btn-link text-secondary" href="#<?php echo $arr_txt_det["cmp_nom"];?>"><?php echo $arr_txt_det['txt_pregunta']?></a></li>
			<?php }else{?>
			<li><?php echo $arr_txt_det['txt_pregunta']?></li>
			<?php
				}
			}
			?>
			</ul>
		</div>
		<?php }else{?>
		<div class="callout callout-success">
			<h5>Módulo terminado, sin observaciones</h5>
		</div>
		<?php }?>
	<?php }else{?>
	<div class="callout callout-warning">
		<h5>Módulo nuevo, pendiente de captura</h5>
	</div>
	<?php }?>
	</div>
</div>


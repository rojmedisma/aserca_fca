<!-- Menú para el formulario -->
	<div class="row">
		<div class="col-md-12">
			<div class="btn-group float-right">
				<?php if($controlador_obj->esLectura()){?>
				<a href="<?php echo url_controlador("cuestionario","forma", array("cat_cuest_modulo_id"=>$controlador_obj->getCatCuestModuloId()), true, true) ?>" class="btn btn-info"><i class="fas fa-edit"></i> Editar</a>
				<?php }elseif($controlador_obj->tienePermiso("escritura")){?>
				<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
					<?php if($controlador_obj->siguienteCatCuestModulo()){?>
					<button type="button" class="btn btn-primary btn_guardar_sig"><i class="fas fa-save"></i> Guardar y siguiente <i class="fas fa-arrow-circle-right"></i></button>
					<?php }?>
				<?php }?>
				
				<?php if($controlador_obj->tienePermiso("ver_cmp_nom") && !$controlador_obj->esLectura()){?>
				<button type="button" class="btn btn-secondary" onClick="Forma.verNombreCampo()"><i class="fas fa-eye-slash"></i> Ver/Ocultar Nombre de campo </button>
				<?php }?>
			</div>
		</div>
	</div>

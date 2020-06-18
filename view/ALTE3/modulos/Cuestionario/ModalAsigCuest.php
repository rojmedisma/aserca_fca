<!-- Modal informativo-->
	<div class="modal fade" id="modal_asig_c">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Asignar cuestionario a usuario</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form name="frm_asig_usr" id="frm_asig_usr" role="form" method="post" action="<?php echo url_controlador('cuestionario','nuevo', '', false) ?>">
					<input type="hidden" name="cat_cuestionario_id" id="cat_cuestionario_id" value="<?php echo $controlador_obj->getCatCuestionarioId(); ?>">
					<div class="modal-body">
						<div class="form-group">
							<?php if(count($controlador_obj->getArrUsuariosCap())){?>
							<label>Selecciona el usuario que va poder entrar a capturar el cuestionario</label>
							<select name="cat_usuario_id" id="cat_usuario_id" class="form-control select2" style="width: 100%;">
								<option value="">[Seleccionar]</option>
								<?php foreach ($controlador_obj->getArrUsuariosCap() as $arr_det_usr){?>
								<option value="<?php echo $arr_det_usr["cat_usuario_id"]?>"><?php echo concatena_nombre($arr_det_usr["nombre"], $arr_det_usr["ap_paterno"], $arr_det_usr["ap_materno"])." (".$arr_det_usr["usuario"].")" ?></option>
								<?php }?>
							</select>
							<?php }else{?>
							<p>No hay usuarios para poder ser asignados</p>
							<?php }?>
						</div>
					</div>
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
						<button type="submit" class="btn btn-primary">Asignar</button>
					</div>
				</form>
					
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
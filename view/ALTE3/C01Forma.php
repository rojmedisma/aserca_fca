<!DOCTYPE html>
<!--
	This is a starter template page. Use this page to start your new project from
	scratch. This page gets rid of all links and provides the needed markup only.
	-->
<html lang="en">
	<head>
		<?php include_once 'modulos/EnHead.php'; ?>
	</head>
	<body class="hold-transition layout-top-nav">
		<form action="" id="frm_cero" name="frm_cero"  method="post">
			<?php include 'modulos/Cuestionario/EnFrmCero.php';?>
		</form>
		<div class="wrapper">
			<!-- Navbar -->
			<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
				<?php include_once 'modulos/EnMainHeader.php';?>
			</nav>
			<!-- /.navbar -->
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper" style="min-height: 492.85px;">
				<!-- Content Header (Page header) -->
				<?php include_once 'modulos/ContentHeader.php'; ?>
				<!-- /.content-header -->
				<!-- Main content -->
				<div class="content">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="card card-primary card-outline">
									<div class="card-header">
										<h3 class="card-title">
											<i class="fas fa-clipboard-list"></i>
											Cuestionario
										</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-5 col-sm-3">
												<div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
													<a class="nav-link" id="tab_instrucciones_tab" data-toggle="pill" href="#tab_instrucciones" role="tab" aria-controls="vert-tabs-home" aria-selected="true">Instrucciones de llenado</a>
													<?php foreach ($controlador_obj->getArrTblCatCuestModulo() as $arr_det_mod){?>
													<a class="nav-link" id="tab_mod<?php echo $arr_det_mod['cat_cuest_modulo_id']?>_tab" href="<?php echo url_controlador("cuestionario","forma", array("cat_cuest_modulo_id"=>$arr_det_mod['cat_cuest_modulo_id']), true, true) ?>" role="tab" aria-controls="vert-tabs-home" aria-selected="false"><?php echo $arr_det_mod['descripcion']; ?></a>
													<?php }?>
													<a class="nav-link" id="tab_resultados_tab" href="<?php echo url_controlador("cuestionario","resultado", array("cat_cuest_modulo_id"=>""), true, true) ?>" role="tab" aria-controls="vert-tabs-home" aria-selected="false">Resultados General</a>
												</div>
											</div>
											<div class="col-7 col-sm-9">
												<div class="tab-content" id="tab_cuestionario">
													<div class="tab-pane text-left fade show" id="tab_instrucciones" role="tabpanel" aria-labelledby="tab_instrucciones_tab">
														<?php include_once 'modulos/Cuestionario/C01/TabInstrucciones.php';?>
													</div>
													<div class="tab-pane text-left fade show" id="tab_mod<?php echo $controlador_obj->getCatCuestModuloId(); ?>" role="tabpanel" aria-labelledby="tab_mod<?php echo $controlador_obj->getCatCuestModuloId(); ?>_tab">
													<form role="form" name="frm_cuest" id="frm_cuest" method="post" action="<?php echo url_controlador('cuestionario','guardar', array(), false) ?>">
														<?php include 'modulos/Cuestionario/FrmMenu.php'; ?>
														<?php include 'modulos/Cuestionario/EnFrmCero.php';?>
														<?php
														if($controlador_obj->getCatCuestModuloId()){
															include_once 'modulos/Cuestionario/C01/TabMod'.$controlador_obj->getCatCuestModuloId().'.php';
														}															
														?>
														<?php include 'modulos/Cuestionario/FrmMenu.php'; ?>
													</form>
													</div>
													<div class="tab-pane text-left fade show" id="tab_resultados" role="tabpanel" aria-labelledby="tab_resultados_tab">
														<?php include_once 'modulos/Cuestionario/C01/TabResultados.php';?>
													</div>
												</div>
											</div>
										</div>
									</div><!-- /.card-body -->
								</div><!-- /.card -->
							</div>
						</div>
					</div><!-- /.container-fluid -->
					
									<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal_info">
                  Launch Small Modal
                </button>
				
					
					
					
				</div><!-- /.content -->
			</div>
			<!-- /.content-wrapper -->
			
			<?php include_once 'modulos/Cuestionario/Modal.php';?>
			<!-- Main Footer -->
			<footer class="main-footer">
				<?php include_once 'modulos/EnFooter.php'; ?>
			</footer>
		</div>
		<!-- ./wrapper -->
		<?php include_once 'modulos/Scripts.php'; ?>
		<?php include_once 'modulos/ScriptCuestForma.php'; ?>
	</body>
</html>
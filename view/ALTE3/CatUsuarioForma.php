<!DOCTYPE html>
<!--
	This is a starter template page. Use this page to start your new project from
	scratch. This page gets rid of all links and provides the needed markup only.
	-->
<html lang="en">
	<head>
		<?php include_once 'modulos/EnHead.php'; ?>
		<!-- DataTables -->
  		<link rel="stylesheet" href="/<?php echo DIR_LOCAL; ?>/library/ALTE3/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	</head>
	<body class="hold-transition layout-top-nav text-sm">
		<form action="" id="frm_cero" name="frm_cero"  method="post">
			
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
					<div class="row">
						<div class="col-8">
							<div class="card<?php echo ($controlador_obj->esActivo())? '':' card-danger card-outline'; ?>">
								<div class="card-header">
									<?php if($controlador_obj->esActivo()){?>
									<h3 class="card-title">Usuario</h3>
									<?php }else{?>
									<h3 class="card-title text-danger">Usuario desactivado</h3>
									<?php }?>
								</div><!-- /.card-header -->
								<form name="frm_usuario" id="frm_usuario" role="form" method="post" action="<?php echo url_controlador('cat_usuario','guardar', '', false) ?>">
									<?php echo $controlador_obj->tag_campo->cmpOculto('cat_usuario_id'); ?>
									<div class="card-body">
										<div class="row">
											<div class="col-md-4">
												<?php echo $controlador_obj->tag_campo->cmpTexto('nombre', array('lbl_txt'=>'Nombre')); ?>
											</div>
											<div class="col-md-4">
												<?php echo $controlador_obj->tag_campo->cmpTexto('ap_paterno', array('lbl_txt'=>'Apellido paterno')); ?>
											</div>
											<div class="col-md-4">
												<?php echo $controlador_obj->tag_campo->cmpTexto('ap_materno', array('lbl_txt'=>'Apellido materno')); ?>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<?php echo $controlador_obj->tag_campo->cmpTexto('correo', array('lbl_txt'=>'Correo')); ?>
											</div>
											<div class="col-md-4">
												<?php echo $controlador_obj->tag_campo->cmpTexto('organizacion', array('lbl_txt'=>'Organismo/Institución')); ?>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<?php echo $controlador_obj->tag_campo->cmpSelectDeTbl('cat_grupo_id','cat_grupo','cat_grupo_id','tit_corto','AND `borrar` IS NULL',array('lbl_txt'=>'Grupo')) ?>
											</div>
											<div class="col-md-4">
												<?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('activo', 'sino',array('lbl_txt'=>'¿Activar usuario?')) ?>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<?php echo $controlador_obj->tag_campo->cmpTexto('usuario', array('lbl_txt'=>'Usuario')); ?>
											</div>
											<div class="col-md-4">
												<?php echo $controlador_obj->tag_campo->cmpContrasenia('clave', array('lbl_txt'=>'Contraseña','value'=>'')); ?>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<?php echo $controlador_obj->tag_campo->cmpTextArea('observaciones', array('lbl_txt'=>'Comentarios')); ?>
											</div>
										</div>
									</div><!--/.card-body  -->
									<?php if($controlador_obj->tienePermiso("escritura")){?>
									<div class="card-footer">
										<button type="submit" class="btn btn-primary float-right">Guardar</button>
									</div><!-- /.card-footer -->
									<?php }?>
								</form><!-- form -->
							</div>
						</div>
						<div class="col-4">
						
						
							<!-- PRODUCT LIST -->
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Permisos del grupo</h3>
									<div class="card-tools">
										<button type="button" class="btn btn-tool" data-card-widget="collapse">
										<i class="fas fa-minus"></i>
										</button>
									</div>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<?php if(count($controlador_obj->getArrGrupo())){?>
									<ul class="products-list product-list-in-card pr-2">
										<?php foreach ($controlador_obj->getArrGrupo() as $arr_det_gpo){?>
										<li class="item">
											<span><?php echo $arr_det_gpo["cp_tit_corto"];?></span>
											<span class="product-description" title="<?php echo $arr_det_gpo["cp_descripcion"];?>"><?php echo $arr_det_gpo["cp_descripcion"];?></span>
										</li>
										<?php }?>
									</ul>
									<?php }?>
								</div>
							</div>
							<!-- /.card -->
						
						
						</div>
					</div>
				</div>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->
			<!-- Main Footer -->
			<footer class="main-footer">
				<?php include_once 'modulos/EnFooter.php'; ?>
			</footer>
		</div>
		<!-- ./wrapper -->
		<?php include_once 'modulos/Scripts.php'; ?>
	</body>
</html>
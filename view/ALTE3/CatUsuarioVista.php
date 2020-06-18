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
			<input type="hidden" name="cat_usuario_id" id="cat_usuario_id" value="">
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
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title"></h3>
									<div class="card-tools">
										<ul class="nav nav-pills ml-auto">
											<li class="nav-item">
												<div class="btn-group dropleft">
													<?php if($controlador_obj->tienePermiso("escritura")){?>
													<a href="<?php echo url_controlador("cat_usuario", "forma", true, true)?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Nuevo usuario</a>
													<?php }?>
												</div>
												
											</li>
										</ul>
									</div>
								</div><!-- /.card-header -->
								<div class="card-body">
									<table id="tbl_catalogo" class="table table-bordered table-striped table-hover">
										<thead>
											<tr>
												<th>Opciones</th>
												<th>Usuario Id</th>
												<th>Nombre</th>
												<th>Usuario</th>
												<th>Org./Instit.</th>
												<th>Activo</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($controlador_obj->getArrTblContenido() as $arr_cont){ ?>
											<tr>
												<td>
													<a href="<?php echo url_controlador('cat_usuario','forma', array('cat_usuario_id'=>$arr_cont['cat_usuario_id']), true, true) ?>" class="btn btn-primary btn-xs">Abrir</a>
												</td>
												<td><?php echo $arr_cont['cat_usuario_id']; ?></td>
												<td><?php echo concatena_nombre($arr_cont['nombre'], $arr_cont['ap_paterno'], $arr_cont['ap_materno']); ?></td>
												<td><?php echo $arr_cont['usuario']; ?></td>
												<td><?php echo $arr_cont['organizacion']; ?></td>
												<td>
													<?php if(intval($arr_cont['activo'])==1){?>
													<span class="badge bg-success">SÍ</span>
													<?php }else{?>
													<span class="badge bg-danger">NO</span>
													<?php }?>
												</td>
											</tr>
											<?php }?>
										</tbody>
										
									</table>
								</div>
							</div>
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
		<script src="/<?php echo DIR_LOCAL; ?>/assets/js/Catalogo.js"></script>
	</body>
</html>
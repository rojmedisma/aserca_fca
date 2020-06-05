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
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title"><?php echo TIT_LARGO; ?></h3>
									<div class="card-tools">
										<ul class="nav nav-pills ml-auto">
											<li class="nav-item">
												
												<div class="btn-group dropleft">
													<?php if($controlador_obj->tienePermiso("nuevo_cuest") && $controlador_obj->tienePermiso("escritura")){?>
													<a href="<?php echo url_controlador("cuestionario", "nuevo", true, true)?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Nuevo cuestionario</a>
													<?php }?>
													<?php if($controlador_obj->tienePermiso("exportar")){?>
													<a href="<?php echo url_controlador("cuestionario", "exportar", array("formato"=>"xls"), true, true)?>" type="button" class="btn btn-default btn-sm"><i class="fas fa-file-excel"></i> Exportar</a>
													<?php }?>
													
												</div>
												
											</li>
										</ul>
									</div>
								</div><!-- /.card-header -->
								<div class="card-body">
									<table id="tbl_cuest_vista" class="table table-bordered table-striped table-hover">
										<thead>
											<tr>
												<th>Opciones</th>
												<th>Cuestionario Id</th>
												<th>Nombre de la organización</th>
												<th>Nombre de la o el representante</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($controlador_obj->getArrTblContenido() as $arr_cont){ ?>
											<tr>
												<td><a href="<?php echo url_controlador('cuestionario','forma', array('cuestionario_id'=>$arr_cont['cuestionario_id']), true, true) ?>" class="btn btn-primary btn-xs">Abrir</a></td>
												<td><?php echo $arr_cont['cuestionario_id']; ?></td>
												<td><?php echo $arr_cont['org_nombre']; ?></td>
												<td><?php echo concatena_nombre($arr_cont['repre_nombre'],$arr_cont['repre_ap_paterno'],$arr_cont['repre_ap_materno']); ?></td>
											</tr>
											<?php }?>
										</tbody>
										<tfoot>
											<tr>
												<th>Opciones</th>
												<th>Cuestionario Id</th>
												<th>Nombre de la organización</th>
												<th>Nombre de la o el representante</th>
											</tr>
										</tfoot>
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
		<?php include_once 'modulos/ScriptCuestVista.php'; ?>
	</body>
</html>
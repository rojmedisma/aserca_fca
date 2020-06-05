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
		<div class="wrapper">
			<!-- Navbar -->
			<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
				<div class="container">
					<img alt="" src="assets/img/sader_aserca.png">
					<img alt="" src="assets/img/fao.png">
				</div>
			</nav>
			<!-- /.navbar -->
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper" style="min-height: 492.85px;">
				<!-- Content Header (Page header) -->
				<div class="content-header">
					<div class="container">
						<div class="row mb-2">
							
						</div>
						<!-- /.row -->
					</div>
					<!-- /.container-fluid -->
				</div>
				<!-- /.content-header -->
				<!-- Main content -->
				<div class="content">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<div class="card">
									<div class="card-body">
										<h2 class="text-center">Instrumento de autoevaluación</h2>
										<h2 class="text-center text-primary">Fortalecimiento de los centros de acopio</h2>
										<div class="text-center">
											<img src="assets/img/img_portada.png">
										</div>
									</div>
								</div>
							</div>
							<!-- /.col-md-6 -->
							<div class="col-lg-4">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title m-0">Iniciar sesión</h5>
									</div>
									<div class="card-body">
										<form action="<?php echo url_controlador('autentificar','autentificar', '', false) ?>" method="post">
											<div class="input-group mb-3">
												<input name="usuario" id="usuario" type="text" class="form-control" placeholder="Usuario">
												<div class="input-group-append">
													<div class="input-group-text">
														<span class="fas fa-user"></span>
													</div>
												</div>
											</div>
											<div class="input-group mb-3">
												<input name="clave" id="clave" type="password" class="form-control" placeholder="Contraseña">
												<div class="input-group-append">
													<div class="input-group-text">
														<span class="fas fa-lock"></span>
													</div>
												</div>
											</div>
											<?php if($controlador_obj->getEsInfoIncorrecta()){ ?>
											<div class="callout callout-danger">
						                    	<h5><i class="icon fas fa-ban"></i> Acceso denegado!</h5>
						                    	<p>Nombre de usuario o contraseña incorrectos</p>
						                    </div>
						                    <?php } ?>
											<button type="submit" class="btn btn-primary btn-block">Ingresar</button>
										</form>
									</div>
								</div>
								
							</div>
							<!-- /.col-md-6 -->
						</div>
						<!-- /.row -->
					</div>
					<!-- /.container-fluid -->
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
<!-- tab_m02 (Pestaña 2, Módulo 3) -->
	<h5>Segundo componente de la autoevaluación.</h5>
	<h4>2. Operación e infraestructura</h4>
	<h5 class="text-secondary">Instalaciones</h5>
	<div class="row">
		<div class="col-md-8"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p1', 'm2p1', array('lbl_txt'=>$controlador_obj->getCuesCmpDef('m2p1','lbl_txt'))); ?></div>
	</div>
	<div class="row">
		<div class="col-md-8"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p2', 'm2p2', array('lbl_txt'=>'2. ¿El centro de acopio cuenta con un domicilio oficial homologado en todos sus documentos y operaciones?')); ?></div>
	</div>
	<div class="row">
		<div class="col-md-8"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p3', 'm2p3', array('lbl_txt'=>'3. ¿Se cuenta con las autorizaciones municipales y/o  estatales   para la operación como centro de acopio para granos?')); ?></div>
	</div>
	<div class="row">
		<div class="col-md-8"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p4', 'm2p4', array('lbl_txt'=>'4.¿Cuenta con  licencia de operación y dictamen de protección civil?')); ?></div>
	</div>
	<?php echo $controlador_obj->tag_campo->label('5. Especificaciones para las instalaciones de almacenamiento');?>
	<p>Sólo aplique al tipo de instalación con que cuenta su CA.</p>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p5r1', 'm2p5r1', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Bodegas planas')); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p5r2', 'm2p5r2', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Silos')); ?></div>
	</div>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p5r3', 'm2p5r3', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Patios')); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p5r4', 'm2p5r4', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Econobodegas')); ?></div>
	</div>
	<h5 class="text-secondary">Operación</h5>
	<?php echo $controlador_obj->tag_campo->label('6. Especificaciones relacionadas con la operación (Instalaciones)');?>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p6r1', 'm2p6r1', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Patio de maniobras')); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p6r2', 'm2p6r2', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Condición de los accesos a las instalaciones de almacenaje')); ?></div>
	</div>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p6r3', 'm2p6r3', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Báscula camionera')); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p6r4', 'm2p6r4', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Equipo contra incendios')); ?></div>
	</div>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p6r5', 'm2p6r5', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Servicios públicos del inmueble')); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p6r6', 'm2p6r6', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Áreas específicas designadas')); ?></div>
	</div>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p6r7', 'm2p6r7', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Equipos para maniobras')); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p6r8', 'm2p6r8', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Equipo de seguridad en la instalación')); ?></div>
	</div>
	<?php echo $controlador_obj->tag_campo->label('7. Especificaciones relacionadas con la operación (Manejo)');?>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p7r1', 'm2p7r1', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Control de acceso')); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p7r2', 'm2p7r2', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Señalizaciones de áreas')); ?></div>
	</div>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p7r3', 'm2p7r3', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Reglamento de acceso')); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p7r4', 'm2p7r4', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Programa de mantenimiento')); ?></div>
	</div>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p7r5', 'm2p7r5', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Capacitación del personal (contingencias)')); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p7r6', 'm2p7r6', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Bitácoras  de seguimiento')); ?></div>
	</div>
	<?php echo $controlador_obj->tag_campo->label('8. Recibo de Producto (De los equipos a operar)');?>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p8r1', 'm2p8r1', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Instrumento de verificación de peso al ingreso')); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p8r2', 'm2p8r2', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Equipo para muestreo')); ?></div>
	</div>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p8r3', 'm2p8r3', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Equipo para determinación de calidad (7 elementos)')); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p8r4', 'm2p8r4', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Área destinada para el análisis del producto')); ?></div>
	</div>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p8r5', 'm2p8r5', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Determinador de humedad')); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p8r6', 'm2p8r6', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Homogenizador de muestras')); ?></div>
	</div>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p8r7', 'm2p8r7', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Peso específico')); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p8r8', 'm2p8r8', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Termómetro')); ?></div>
	</div>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p8r9', 'm2p8r9', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Zarandas/cribas de análisis')); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p8r10', 'm2p8r10', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Báscula granataria')); ?></div>
	</div>
	<?php echo $controlador_obj->tag_campo->label('9. Recibo del Producto (del manejo de la operación)');?>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p9r1', 'm2p9r1', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Registro de acceso de las unidades a carga')); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p9r2', 'm2p9r2', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Muestreo del producto previo a descarga')); ?></div>
	</div>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p9r3', 'm2p9r3', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Determinación de calidad (10 parámetros)')); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p9r4', 'm2p9r4', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Cuidado de las condiciones de entrada del producto')); ?></div>
	</div>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p9r5', 'm2p9r5', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Manejo de calidades y clasificación')); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p9r6', 'm2p9r6', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Documento de referencia para análisis producto')); ?></div>
	</div>
	<?php echo $controlador_obj->tag_campo->label('10. Control de inventarios');?>
	<div class="row">
		<div class="col-md-8"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p10r1', 'm2p10r1', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Registro de entradas y salidas del producto')); ?></div>
	</div>
	<div class="row">
		<div class="col-md-8"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p10r2', 'm2p10r2', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Datos para la trazabilidad: peso bruto, peso tara, peso neto de la unidad, origen: localidad y productor, placas de tractor y remolque, nombre del conductor, fecha y hora de ingreso, descripción del producto, ciclo de producción.')); ?></div>
	</div>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p10r3', 'm2p10r3', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Inventarios físicos')); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p10r4', 'm2p10r4', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Inventarios documentales')); ?></div>
	</div>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p10r5', 'm2p10r5', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Equipo para determinación de inventarios')); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p10r6', 'm2p10r6', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Monitoreo del producto')); ?></div>
	</div>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p10r7', 'm2p10r7', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Mitigación de daños')); ?></div>
	</div>
	<?php echo $controlador_obj->tag_campo->label('11. Equipo para la operación y conservación del producto');?>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p11r1', 'm2p11r1', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Áreas de equipamiento 9 elementos a identificar. Inciso 6.5 I, descritos en el cuadro de diálogo')); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p11r2', 'm2p11r2', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Mantenimiento preventivo')); ?></div>
	</div>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p11r3', 'm2p11r3', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Capacitación para el uso de equipos')); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p11r4', 'm2p11r4', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Capacitación para uso de equipos contraincendios')); ?></div>
	</div>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p11r5', 'm2p11r5', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Equipo de seguridad para los operarios')); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p11r6', 'm2p11r6', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Equipo para aplicación de fumigantes')); ?></div>
	</div>
	<?php echo $controlador_obj->tag_campo->label('12. Control de plagas y sanitización');?>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p12r1', 'm2p12r1', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Monitoreo del equipo de movilización del producto')); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p12r2', 'm2p12r2', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Mantenimiento de las instalaciones')); ?></div>
	</div>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p12r3', 'm2p12r3', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Plan de desinfección de instalaciones')); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p12r4', 'm2p12r4', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Cercos sanitarios')); ?></div>
	</div>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p12r5', 'm2p12r5', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Servicios sanitarios')); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p12r6', 'm2p12r6', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Manejo de agrotóxicos y fumigantes')); ?></div>
	</div>
	<?php echo $controlador_obj->tag_campo->label('13. Liberación y salida del producto');?>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p13r1', 'm2p13r1', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Registro de unidad de embarque')); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p13r2', 'm2p13r2', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Check list  para la unidad de transporte')); ?></div>
	</div>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p13r3', 'm2p13r3', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Orden de embarque')); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p13r4', 'm2p13r4', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Trazabilidad de las unidades de carga')); ?></div>
	</div>
	<?php echo $controlador_obj->tag_campo->label('14. Conservación del producto');?>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p14r1', 'm2p14r1', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Monitoreo del producto: temperatura del granel, humedad, presencia de insectos plaga, puntos de calentamiento, puntos de compactación, presencia de roedores, presencia de condensación en techos y paredes, presencia de materia extraña.')); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p14r2', 'm2p14r2', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Encargado de monitoreo y conservación')); ?></div>
	</div>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p14r3', 'm2p14r3', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Bitácora de conservación')); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p14r4', 'm2p14r4', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Equipo para la conservación')); ?></div>
	</div>
	<div class="row">
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p14r5', 'm2p14r5', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Manual interno para la conservación')); ?></div>
		<div class="col-md-6"><?php echo $controlador_obj->tag_campo->cmpSelectDeSubCat('m2p14r6', 'm2p14r6', array('lbl_class'=>'lbl-sub', 'lbl_txt'=>'Capacitación del personal (muestreo y análisis)')); ?></div>
	</div>
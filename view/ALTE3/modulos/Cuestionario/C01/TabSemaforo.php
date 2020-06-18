<?php
//echo "<br>".json_encode($controlador_obj->getArrResSemaforo())."<br>";

?>
<!-- Tab Semáforo -->
	<h4>Semáforo de operación de Centros de acopio</h4>
	<div class="row">
		<div class="col-md-8">
			<?php if($controlador_obj->getValorSemaforo('nivel_semaforo')==3){?>
			<!-- Rojo. Nivel 3 -->
			<div class="alert alert-danger alert-dismissible">
				<h5><i class="fas fa-traffic-light mr-1"></i>Débil, amplias oportunidades de desarrollo</h5>
				<p>Acceso limitado al financiamiento, bajo esquemas competitivos, que permitan el desarrollo de la empresa, los indicadores financieros observan acciones a implementar para mejorar la posición ante las entidades financieras.</p>
				<p>Los elementos de administración y organización, requieren de desarrollar e implementar acciones para mejorar los procesos.</p>
				<p>Se accede a un mercado limitado de compradores que comúnmente imponen los precios de salida, no se ofrecen servicios asociados que generan valor al producto.</p>
				<p>La infraestructura es limitada y no permite procesos de conservación. Las maniobras del producto se llevan a cabo de manera manual.</p>
			</div>
			<?php }elseif($controlador_obj->getValorSemaforo('nivel_semaforo')==2){?>
			<!-- Amarillo. Nivel 2 -->
			<div class="alert alert-warning alert-dismissible">
				<h5><i class="fas fa-traffic-light mr-1"></i>Bien con múltiples oportunidades de desarrollo</h5>
				<p>Acceso a múltiples opciones de financiamiento a partir del buen manejo de los indicadores financieros de la empresa, no se cuentan con las mejores condiciones de acceso, pero se mantienen buenas calificaciones crediticias.</p>
				<p>Los elementos de administración y organización, así como el gobierno corporativo impulsan el desarrollo y la operación de la empresa, se observan temas pendientes a implementar, áreas de recursos humanos, manuales de operación, trazabilidad de los procesos, debilidades en la transparencia de la información.</p>
				<p>Se accede a un mercado con múltiples opciones de oferta, se ofrece calidad y servicios asociados que generan valor al producto.</p>
				<p>Las operación e instalaciones permiten llevara a cabo procesos de conservación y se tiene la oportunidad de ofertar producto durante todo el año, se cuenta con una operación de manejo del producto semimecanizada (50% mecanizada / 50% manual).</p>
			</div>
			<?php }elseif($controlador_obj->getValorSemaforo('nivel_semaforo')==1){?>
			<!-- Verde. Nivel 1 -->
			<div class="alert alert-success alert-dismissible">
				<h5><i class="fas fa-traffic-light mr-1"></i>Muy fortalecida</h5>
				<p>Acceso a múltiples opciones de financiamiento a partir del buen manejo de los indicadores financieros de la empresa.</p>
				<p>Los elementos de administración y organización, así como el gobierno corporativo impulsan el desarrollo y la operación de la empresa.</p>
				<p>Se accede a un mercado con múltiples opciones de oferta, se ofrece calidad y servicios asociados que generan valor al producto.</p>
				<p>Se cuenta con infraestructura y equipamiento que permiten ofrecer disponibilidad y calidad.</p>
				<p>La infraestructura permite llevar a cabo maniobras de conservación y mantener una oferta de producto en la región durante todo el año, más del 80% de las maniobras de manejo del producto se llevan a cabo de manera mecanizada.</p>
			</div>
			<?php }else{?>
			<div class="callout callout-warning">
				<h5>Cuestionario incompleto</h5>
				<p>Para poder consultar el valor del semáforo, favor de completar el cuestionario</p>
			</div>
			<?php }?>
		</div>
	</div>

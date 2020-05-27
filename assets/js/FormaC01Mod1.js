var FormaC01Mod1 = function(){
	function ocu_div_org(){
		var v_ocultar = (getValueForm('persona_tipo',true)==1)? true : false;
		ocultar_secciones(v_ocultar, "#div_org");
		bloqueaCampos(v_ocultar, ['org_nombre','org_razon_soc']);
	}
	/**
	 * Acciones que se ejecutan dependiendo del valor en el el campo ubica_estado
	 */
	function dep_ubica_estado(){
		v_cat_estado_id = getValueForm('ubica_estado',false);
		
		$.ajax({
			url:"index.php?controlador=catalogo&accion=imprime_municipios",
			data:"cat_estado_id="+v_cat_estado_id,
			cache:false,
			dataType:"html",
			success:function(result){
				$("#ubica_municipio").html(result);
			},
			error:function(result){
				alert("Error interno");
			}
		});
	}
	function coloca_info_liga(v_atr_nombre, v_txt_tit, v_txt_info){
		var v_tag_btn = ' <a href="#" data-toggle="modal" data-target="#modal_info" data-txt_tit="'+v_txt_tit+'" data-txt_info="'+v_txt_info+'"><i class="fas fa-info"></i></a>';
		var v_tag_content = $(v_atr_nombre).html();
		$(v_atr_nombre).html(v_tag_content+v_tag_btn);
	}
	return{
		activar:function(v_cat_cuest_modulo_id){
			if(v_cat_cuest_modulo_id==1){
				$("#ubica_estado").change(function(){dep_ubica_estado();});
				$("#persona_tipo").change(function(){
					ocu_div_org();
				});
				ocu_div_org();
			}
			var v_txt_tit = "Información";
			var v_txt_info = "";
			if(v_cat_cuest_modulo_id==3){
				v_txt_info = "Equipo: maniobras de entrada y salidad del producto, conservacion y movimiento de producto al interior de la bodega o silo, monitoreo y determinación de la calidad, monitoreo de las existencias, control de inventarios, control de plagas, aseguramiento de la instalación, contra incendios, control de accesos.";
				coloca_info_liga("label[for='m2p11r1']", v_txt_tit, v_txt_info);
				v_txt_info = "Peso bruto de báscula y de llegada a la instalación, peso tara y peso neto de bascula de salida de la instalación, destino, placas de tractor y remolque, nombre del conductor, fecha y hora de ingreso, descripción del producto, análisis cualitativo del producto, área de firma para la conformidad del conductor de la unidad y analista.";
				coloca_info_liga("label[for='m2p13r1']", v_txt_tit, v_txt_info);
			}
			if(v_cat_cuest_modulo_id==6){
				v_txt_info = "9 elementos: Producto a embarcar, identificación del producto , numero de lote o bodega donde se realiza la carga, peso o volumen a cargar, resultados del análisis de calidad al momento de la carga, datos del transportista, datos de la unidad  de transporte, nombre del chofer, destino del producto, número de guia o factura de producto para traslado, datos de quien recibe el producto.";
				coloca_info_liga("label[for='m5p6']", v_txt_tit, v_txt_info);
			}
		}
	}
}();
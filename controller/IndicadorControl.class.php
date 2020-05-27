<?php
class IndicadorControl extends ControladorBase {
	private $cat_cuestionario_id;
	private $cuestionario_id;
	public function calculo_registro(){
		$this->cat_cuestionario_id = (isset($_REQUEST['cat_cuestionario_id']))? intval($_REQUEST['cat_cuestionario_id']) : "1";
		$this->cuestionario_id = (isset($_REQUEST['cuestionario_id']))? $_REQUEST['cuestionario_id'] : "";
		
		$cuestionario = new Cuestionario($this->getCatCuestionarioId());
		$cuestionario->setArrCuestionario($this->getCuestionarioId());	//Arreglo con el detalle de todos los campos del registro de cuestionario identificado mediante el argumento cuestionario_id
		$arr_cmps_frm = $cuestionario->getArrCuestionario();
		
		$cat_cuest_modulo = new CatCuestModulo($this->getCatCuestionarioId());
		$cat_cuest_modulo->setArrTblCat();
		//Se crea arreglo del contenido de la tabla cat_cuest_modulo para generar las pestañas en la forma
		$arr_tbl_cat_cuest_modulo = $cat_cuest_modulo->getArrTbl();
		
		
		$indicador = new Indicador();
		$indicador->setCuestionario($this->getCatCuestionarioId(), $arr_cmps_frm);
		foreach ($arr_tbl_cat_cuest_modulo as $arr_cat_cuest_modulo){
			$cat_cuest_modulo_id = (isset($arr_cat_cuest_modulo['cat_cuest_modulo_id']))? intval($arr_cat_cuest_modulo['cat_cuest_modulo_id']) : 0;
			//No se toma en cuenta el primer modulo debido a que es el de Datos Generales
			if($cat_cuest_modulo_id>1){
				$indicador->setArrResultadoCuestModulo($cat_cuest_modulo_id);
				$arr_resultado = $indicador->getArrResultado();
				echo "<br>".json_encode($arr_resultado)."<br>";
			}
		}
		
		
		
	}
	/**
	 * Devuelve el valor de la variable <strong>cuestionario_id</strong>
	 * @return integer
	 */
	public function getCuestionarioId(){
		return $this->cuestionario_id;
	}
	/**
	 * Devuelve el valor de la variable <strong>cat_cuestionario_id</strong>
	 * @return string|number
	 */
	public function getCatCuestionarioId(){
		return $this->cat_cuestionario_id;
	}
}
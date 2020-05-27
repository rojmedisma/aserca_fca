<?php
/**
 * Clase modelo para el grupo de cuestionarios identificados mediante el valor de la variable cat_cuestionario_id
 * @author Ismael Rojas
 *
 */
class Cuestionario{
	private $cat_cuestionario_id;
	private $cuestionario_id;
	private $arr_cuestionario = array();
	private $arr_tbl_cuestionario = array();
	private $cat_cuestionario;
	private $and_tbl_c00;
	private $bd;
	public function __construct($cat_cuestionario_id){
		$this->bd = new BaseDatos();
		$this->cat_cuestionario_id = $cat_cuestionario_id;
		$this->and_tbl_c00 = " AND `borrar` IS NULL AND `cat_cuestionario_id` = '".$this->getCatCuestionarioId()."' ";
	}
	/**
	 * Devuelve el id del cuestionario actual
	 * @return integer
	 */
	public function getCatCuestionarioId(){
		return $this->cat_cuestionario_id;
	}
	/**
	 * Devuelve la sentencia query AND con el filtrado necesario para la consulta en la tabla de cuestionario c00
	 * La sentencia se asigna en el constructor
	 * @return string
	 */
	public function getAndTblC00(){
		return $this->and_tbl_c00;
	}
	/**
	 * Genera arreglo con el detalle de todos los campos del registro de cuestionario identificado mediante el argumento cuestionario_id
	 * @param array $cuestionario_id
	 */
	public function setArrCuestionario($cuestionario_id){
		$this->cuestionario_id = $cuestionario_id;
		$arr_cuestionario = array();
		if($cuestionario_id!=""){
			$cat_cuest_modulo = new CatCuestModulo($this->getCatCuestionarioId());
			$cat_cuest_modulo->setArrCmpListaTablas();
			$arr_lista_tablas = $cat_cuest_modulo->getArrCmpListaTablas();
			array_unshift($arr_lista_tablas, "c00");	//Se incluye al principio la tabla c00
			
			$and_cuest= " AND `cuestionario_id` LIKE '".$cuestionario_id."' ";
			foreach ($arr_lista_tablas as $tabla){
				$arr_cmps = $this->bd->getArrCmpsTbl($tabla);
				if($tabla=="c00"){
					$arr_cmps[] = array("Field"=>"usuario");	//Se agrega el campo usuario
					$qry = "SELECT `".$tabla."`.*, `cat_usuario`.`usuario`
						FROM `".$this->bd->getBD()."`.`".$tabla."`
						LEFT JOIN `".$this->bd->getBD()."`.`cat_usuario` ON(`cat_usuario`.`cat_usuario_id` = `".$tabla."`.`cat_usuario_id`)
						WHERE 1 ".$and_cuest;
				}else{
					$qry = "SELECT * FROM `".$this->bd->getBD()."`.`".$tabla."` WHERE 1 ".$and_cuest;
				}
				
				$rs = $this->bd->getRes($qry);
				if(!$rs)	die($this->bd->getTagErrorSQL($qry));
				$row = $rs->fetch_array();
				foreach ($arr_cmps as $arr_det){
					$cmp_nom = $arr_det['Field'];
					$arr_cuestionario[$cmp_nom] = $row[$cmp_nom];
				}
				$rs->close();
			}
		}
		$this->arr_cuestionario = $arr_cuestionario;
	}
	/**
	 * Devuelve el arreglo que contiene todo el detalle de campos del cuestionario actual
	 * @return array
	 */
	public function getArrCuestionario(){
		return $this->arr_cuestionario;
	}
	/**
	 * Devuelve el Id del cuestionario actual
	 * @return array
	 */
	public function getCuestionarioId(){
		return $this->cuestionario_id;
	}
	/**
	 * Genera arreglo con todos los registros de cuestionario filtrados a partir del argumento <strong>and</strong>
	 * @param string $and
	 */
	public function setArrTblCuestionario($and=""){
		$and_c = $this->getAndTblC00().$and;
		$arr_tbl = $this->bd->getArrDeTabla("c00", $and_c);
		$arr_tbl_c = array();
		foreach ($arr_tbl as $arr_det){
			$this->setArrCuestionario($arr_det['cuestionario_id']);
			$arr_tbl_c[$arr_det['cuestionario_id']] = $this->getArrCuestionario();
		}
		$this->arr_tbl_cuestionario = $arr_tbl_c;
	}
	/**
	 * Devuelve un arreglo con todos los registros de cuestionario
	 * @return array
	 */
	public function getArrTblCuestionario(){
		return $this->arr_tbl_cuestionario;
	}
	/**
	 * Devuelve el valor del campo del registro de cuestionario contenido en el arreglo arr_cuestionario
	 * Nota: Primero se debe generar el arreglo con la función setArrCuestionario()
	 * @param string $cmp_nom
	 * @return string
	 */
	public function getCuestCmpVal($cmp_nom){
		$arr_cuestionario = $this->getArrCuestionario();
		$cuest_cmp_val = "";
		if(count($arr_cuestionario)){
			if(isset($arr_cuestionario[$cmp_nom])){
				$cuest_cmp_val = $arr_cuestionario[$cmp_nom];
			}
		}
		return $cuest_cmp_val;
	}
}
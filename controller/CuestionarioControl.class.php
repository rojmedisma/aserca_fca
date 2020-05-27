<?php
/**
 * Controlador para los cuestionarios
 * Se utiliza en todos los cuestioanarios, ya que la funcionalidad y las acciones son las mismas, lo que cambia es el contenido.
 * @author Ismael Rojas
 *
 */
class CuestionarioControl extends ControladorBase{
	public $tag_campo = null;
	public $permiso;
	public $parametros_JSON;
	public $and_estado="";
	public $ver_res_gen = false;
	private $cat_cuestionario_id;
	private $cuestionario_id;
	private $arr_tbl_cue = array();
	private $arr_tbl_cat_cuest_modulo = array();
	private $cat_cuest_modulo_id=0;
	private $arr_cuest_cmp_def=array();
	private $arr_res_indicador = array();
	public function __construct(){
		$this->cat_cuestionario_id = (isset($_REQUEST['cat_cuestionario_id']))? intval($_REQUEST['cat_cuestionario_id']) : "1";
		$this->cuestionario_id = (isset($_REQUEST['cuestionario_id']))? $_REQUEST['cuestionario_id'] : "";
		$this->cat_cuest_modulo_id = (isset($_REQUEST['cat_cuest_modulo_id']))? $_REQUEST['cat_cuest_modulo_id'] :0;
		
		$this->parametros_JSON = new ParametrosJSON();	//Clase para el campo json_parametros
		$this->setArrRegUsuario();	//Se crea el arreglo con el detalle de datos del usuario
		
		$this->permiso = new Permiso();
		$cuet_cve = cuest_cve($this->getCatCuestionarioId());
		$this->setArrPermiso("escritura", $this->permiso->tiene_permiso($cuet_cve.'_ae'));
		$this->setArrPermiso("aprobar", $this->permiso->tiene_permiso($cuet_cve.'_aprob'));
		$this->setArrPermiso("exportar", $this->permiso->tiene_permiso($cuet_cve.'_exportar'));
		$this->setArrPermiso("borrar", $this->permiso->tiene_permiso($cuet_cve.'_borrar'));
	}
	/**
	 * Acción para abrir la vista o consulta de registros de cuestionario
	 */
	public function vista(){
		$this->setPaginaDistintivos();
		if($this->getCatCuestionarioId()!=""){
			//Se limpia cat_cuest_modulo_id para que al abrir en forma, salga al principio
			$this->cat_cuest_modulo_id = 0;
			$cuestionario = new Cuestionario($this->getCatCuestionarioId());
			//$this->setAndCuest();
			$and_c = "";
			$cuestionario->setArrTblCuestionario($and_c);
			$this->arr_tbl_cue = $cuestionario->getArrTblCuestionario();
			
			
			$nom_arc_vista = strtoupper(cuest_cve($this->getCatCuestionarioId()))."Vista.php";
			$this->setMostrarVista($nom_arc_vista);
		}else{
			redireccionar("error","sin_arg_cat_cuestionario_id");
		}
	}
	/**
	 * Acción para abrir la forma cuestionario y desplegar toda la funcionalidad necesaria para su captura en caso de ser un cuestionario nuevo, adenás de mostrar la información ya capturada en caso de ser un cuestionario capturado.
	 */
	public function forma(){
		$this->setPaginaDistintivos();
		
		//Subfuncion para esta acción forma
		$this->setForma();
		
		//Se obtiene el arreglo de definición de campos de los módulos del cuestionario
		if($this->getCatCuestModuloId()){
			$cuest_cmp_def = new CuestCmpDef($this->getCatCuestionarioId());
			$cuest_cmp_def->setArrRegsXCatCuestModuloId($this->getCatCuestModuloId());
			$this->arr_cuest_cmp_def = $cuest_cmp_def->getArrTbl();
		}
		
		//NOTA: En setForma() se define el arreglo arr_cmps_frm (getArrCmpsForm())
		$arr_validaciones = array();
		if($this->getCuestionarioId()){
			$this->parametros_JSON->setJSON($this->getCuestionarioId());
			$llave_p_es_modulo_activo = "p_es_mod".$this->getCatCuestModuloId()."_activo";
			$p_es_modulo_activo = $this->parametros_JSON->getValor($llave_p_es_modulo_activo);
			if($p_es_modulo_activo){
				$validar = new Validar();
				$validar->serArrReglasDeCuestionario($this->getCatCuestionarioId(), $this->getCatCuestModuloId(), $this->getArrCmpsForm());
				$validar->setArrValidaciones();
				$arr_validaciones = $validar->getArrValidaciones();
			}
			
		}
		//echo "<br>".json_encode($arr_validaciones)."<br>";
		if($this->getCatCuestModuloId()==1){
			$ubica_estado = valorEnArreglo($this->getArrCmpsForm(), 'ubica_estado');
			$this->and_estado = ($ubica_estado!="")? " AND `cat_estado_id` LIKE '".$ubica_estado."'" : "";
		}
		
		
		$this->tag_campo = new Campos();
		$this->tag_campo->setVerNombreCampo(true);
		$this->tag_campo->setConSelect2(true);
		$this->tag_campo->setValorCampos($this->getArrCmpsForm());
		$this->tag_campo->setLectura(false);
		if(count($arr_validaciones)){
			$this->tag_campo->setArrValidaciones($arr_validaciones);
		}
		
		//NOTA: En setForma() se define la vista a mostrar
	}
	
	/**
	 * Acción para guardar el módulo del cuestionario actual
	 */
	public function guardar(){
		if(!$this->getCatCuestModuloId()){
			redireccionar("error","sin_arg_cat_cuest_modulo_id");
		}
		if($this->tienePermiso("escritura")){
			$bd = new BaseDatos();
			
			$cat_cuest_modulo = new CatCuestModulo($this->getCatCuestionarioId());
			$cat_cuest_modulo->setArrCmpListaTablas($this->getCatCuestModuloId());
			$arr_lista_tablas = $cat_cuest_modulo->getArrCmpListaTablas();
			if(empty($arr_lista_tablas)){
				redireccionar("error","valor_de_campo_vacio", array("tbl_nom"=>"cat_cuest_modulo", "cmp_nom"=>"lista_tablas"));
			}
			$arr_cmps = array();
			foreach ($arr_lista_tablas as $tabla){
				$arr_cmps_cu = $bd->getArrCmpsTbl($tabla);
				foreach ($arr_cmps_cu as $arr_cmps_cu_det){
					$cmp_nom = $arr_cmps_cu_det['Field'];
					switch($cmp_nom){
						case 'cuestionario_id':
							break;
						default:
							$arr_cmps[$tabla][$cmp_nom] = (isset($_REQUEST[$cmp_nom]))? txt_sql($_REQUEST[$cmp_nom]) : "NULL";
							break;
					}
				}
			}
			//Se guarda el registro actualizando los valores y tablas indicadas en el arreglo $arr_cmps
			$guardar = new Guardar();
			$guardar->setGuardaCuest($arr_cmps, $this->getCatCuestionarioId(), $this->getCuestionarioId());
			$this->cuestionario_id = $guardar->getCmpIdVal();
			
			//Se actualiza el campo json_parametros
			$this->actualizaParametrosJSON($this->getCuestionarioId(), $this->getCatCuestModuloId());
		}else{
			redireccionar('error','sin_permisos', array('tit_accion'=>'Guardar cuestionario'));
		}
		//$nom_arc_vista = strtoupper(cuest_cve($this->getCatCuestionarioId()))."Forma.php";
		
		redireccionar('cuestionario','forma', $this->arrRedirecForma());
	}
	public function resultado(){
		$this->setPaginaDistintivos();
		$this->ver_res_gen = true;	//Para activar la pestaña o tab de Resultados Generales
		
		//Subfuncion para esta acción forma
		$this->setForma();
		
		$indicador = new Indicador();
		$indicador->setArrResReg($this->getCatCuestionarioId(), $this->getArrCmpsForm());
		$arr_res_reg = $indicador->getArrResReg();
		$this->arr_res_indicador = $arr_res_reg;
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
	/**
	 * Devuelve el valor de la variable que contiene el arreglo de registros de cuestionarios a motrar
	 * @return array
	 */
	public function getArrTblContenido(){
		return $this->arr_tbl_cue;
	}
	
	/**
	 * Devuelve el arreglo de la tabla de módulos por cuestionario
	 * @return array
	 */
	public function getArrTblCatCuestModulo() {
		return $this->arr_tbl_cat_cuest_modulo;
	}
	/**
	 * Devuelve el Id del módulo que en este momento se despliega en la forma
	 * @return integer
	 */
	public function getCatCuestModuloId() {
		return $this->cat_cuest_modulo_id;
	}
	
	/**
	 * Devuelve el valor de definicion del campo especificado en el argumento
	 * @param string $cmp_llave	Nombre del campo de cuestionario pertenciente a un módulo o sección
	 * @param string $cmp_nom	Nombre del campo almacenado en la tabla cues_cmp_def
	 * @return string
	 */
	public function getCuesCmpDef($cmp_llave, $cmp_nom){
		$arr_cuest_cmp_def = $this->arr_cuest_cmp_def;
		
		if(isset($arr_cuest_cmp_def[$cmp_llave][$cmp_nom])){
			return $arr_cuest_cmp_def[$cmp_llave][$cmp_nom];
		}else{
			return "";
		}
	}
	
	public function getArrResIndicador(){
		return $this->arr_res_indicador;
	}
	/**
	 * Subfuncion de la acción forma. Contiene el código necesario para el funcionamiento de la vista Forma sin necesidad del despliegue de campos.
	 * Las operaciones definidas en esta función no deben ser las usadas para el despliegue de formulario
	 * Útil para ser llamada por otra acción que no requiera el despliegue del formulario pero es necesario mostrar el resultado en la vista de Formulario, como es el caso de la pestaña de resultados
	 */
	private function setForma(){
		if($this->getCatCuestionarioId()==""){
			redireccionar("error","sin_arg_cat_cuestionario_id");
		}
		
		$cat_cuest_modulo = new CatCuestModulo($this->getCatCuestionarioId());
		$cat_cuest_modulo->setArrTblCat();
		//Se crea arreglo del contenido de la tabla cat_cuest_modulo para generar las pestañas en la forma
		$this->arr_tbl_cat_cuest_modulo = $cat_cuest_modulo->getArrTbl();
		
		$arr_cmps_frm = array();
		if($this->getCuestionarioId()){
			$cuestionario = new Cuestionario($this->getCatCuestionarioId());
			$cuestionario->setArrCuestionario($this->getCuestionarioId());	//Arreglo con el detalle de todos los campos del registro de cuestionario identificado mediante el argumento cuestionario_id
			$arr_cmps_frm = $cuestionario->getArrCuestionario();
		}
		$this->arr_cmps_frm = $arr_cmps_frm;
		
		$nom_arc_vista = strtoupper(cuest_cve($this->getCatCuestionarioId()))."Forma.php";
		$this->setMostrarVista($nom_arc_vista);
	}
	/**
	 * Regresa un arreglo con los parámetros o argumentos necesarios para redireccionarse a la acción forma.
	 * Nota. Éste arreglo debe estar conformado con las variables obtenidas mediante el arreglo $_REQUEST en el constructor, además que dentro del formulario; también deberían estar dentro de los campos usados declarados para frm_cero
	 */
	private function arrRedirecForma(){
		return array(
				'cuestionario_id'=>$this->getCuestionarioId(),
				'cat_cuestionario_id'=>$this->getCatCuestionarioId(),
				'cat_cuest_modulo_id'=>$this->getCatCuestModuloId()
		);
	}
	/**
	 * Se actualiza el campo json_parametros
	 * @param int $cuestionario_id
	 * @param int $cat_cuest_modulo_id
	 */
	private function actualizaParametrosJSON($cuestionario_id, $cat_cuest_modulo_id){
		$this->parametros_JSON->setJSON($cuestionario_id);
		$llave_p_es_modulo_activo = "p_es_mod".$cat_cuest_modulo_id."_activo";
		$this->parametros_JSON->modificaValor($llave_p_es_modulo_activo, 1);
		$this->parametros_JSON->guardar();
	}
	
}
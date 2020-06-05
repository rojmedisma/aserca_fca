<?php
class Semaforo{
	private $arr_res_semaforo = array();
	private $arr_op_indicador = array();
	private $arr_indicador = array();
	private $persona_tipo;
	private $cuestionario_id;
	private $arr_cmps_frm;
	
	public function setArrResSemaforo($arr_cmps_frm){
		$this->arr_cmps_frm = $arr_cmps_frm;
		$this->setArrOpIndicador();
		$arr_op_indicador = $this->getArrOpIndicador();
		
		$persona_tipo = (isset($arr_cmps_frm['persona_tipo']))? intval($arr_cmps_frm['persona_tipo']) : 0;
		
		
		$tot_num_tot_reactivos = 0;
		$tot_ptos_maximos = 0;
		$tot_ptos_pond = 0;	//Puntos ponderador es Puntos obtenidos en el Excel.
		foreach ($arr_op_indicador as $indicador_id => $arr_oi_det){
			$num_tot_reactivos = (isset($arr_oi_det['num_tot_reactivos']))? $arr_oi_det['num_tot_reactivos'] : 0;
			$ptos_maximos = (isset($arr_oi_det['ptos_maximos']))? $arr_oi_det['ptos_maximos'] : 0;
			$ptos_pond = (isset($arr_oi_det['ptos_pond']))? $arr_oi_det['ptos_pond'] : 0;
			
			$tot_num_tot_reactivos += $num_tot_reactivos;
			$tot_ptos_maximos +=$ptos_maximos;
			$tot_ptos_pond +=$ptos_pond;
			
		}
		
		$nivel_semaforo = 0;
		if($persona_tipo){
			if($persona_tipo==1){
				$lim_min = 183;
				$lim_max = 293;
			}elseif($persona_tipo==2){
				$lim_min = 159;
				$lim_max = 254;
			}
			if($tot_ptos_pond>$lim_max){
				$nivel_semaforo = 1;
			}elseif($tot_ptos_pond<$lim_max && $tot_ptos_pond>$lim_min){
				$nivel_semaforo = 2;
			}else{
				$nivel_semaforo = 3;
			}
		}else{
			$log = new Log();
			$log->setRegLog("cuestionario_id", $this->cuestionario_id, "Semaforo.class.php", "Error", "valor en persona_tipo no identificado");
		}
		$this->arr_res_semaforo = array(
				'tot_num_tot_reactivos' =>$tot_num_tot_reactivos,
				'tot_ptos_maximos'=>$tot_ptos_maximos,
				'tot_ptos_pond'=>$tot_ptos_pond,
				'nivel_semaforo'=>$nivel_semaforo,
				'arr_op_indicador'=>$arr_op_indicador
		);
	}
	public function getArrResSemaforo() {
		return $this->arr_res_semaforo;
	}
	
	private function setArrOpIndicador() {
		$arr_cmps_frm = $this->arr_cmps_frm;
		extract($arr_cmps_frm, EXTR_OVERWRITE);
		//Se declaran como propiedades de clase debido a que se estan usando en setArrIndicador
		$this->persona_tipo = $persona_tipo;	
		$this->cuestionario_id = $cuestionario_id;
		
		$arr_res_semaforo = array();
		
		//1. Acceso al financiamiento
		$i1_ptos = $m6p3 + $m6p4 + $m6p5 + $m6p9 + $m6p12 + $m6p14 + $m6p15 + $m6p17 + $m6p18;
		$i1_ptos_pond = ($m6p3*1) + ($m6p4*1) + ($m6p5*1) + ($m6p9*2) + ($m6p12*2) + ($m6p14*1) + ($m6p15*1) + ($m6p17*1) + ($m6p18*2);
		$this->setArrIndicador(1, $i1_ptos, $i1_ptos_pond);
		$arr_res_semaforo[1] = $this->getArrIndicador();
		
		//2.Nivel de construcción organizativo
		$i2_ptos = 0;
		$i2_ptos_pond = 0;
		if(intval($persona_tipo)){
			if(intval($persona_tipo)==1){
				//Personas físicas
				$i2_ptos = $m1p1 + $m1p2 + $m4p1 + $m4p3;
				$i2_ptos_pond = ($m1p1*1) + ($m1p2*1) + ($m4p1*1) + ($m4p3*2);
			}elseif(intval($persona_tipo)==2){
				//Personas Morales
				$i2_ptos = $m1p1 + $m1p2 + $m4p4r1 + $m4p4r2 + $m4p4r3 + $m4p5r1 + $m4p5r2 + $m4p5r3 + $m4p6;
				$i2_ptos_pond = ($m1p1*1) + ($m1p2*1) + ($m4p4r1*2) + ($m4p4r2*2) + ($m4p4r3*2) + ($m4p5r1*2) + ($m4p5r2*2) + ($m4p5r3*2) + ($m4p6*1);
			}
		}
		$this->setArrIndicador(2, $i2_ptos, $i2_ptos_pond);
		$arr_res_semaforo[2] = $this->getArrIndicador();
		
		
		//3. Prácticas de conservación y buenas prácticas de almacenamiento
		$i3_op1_ptos = ($m2p5r1 + $m2p5r2 + $m2p5r3 + $m2p5r4) / 4;
		$i3_op1_ptos_pond = $i3_op1_ptos*2;
		$i3_ptos = $i3_op1_ptos + $m2p6r1 + $m2p7r4 + $m2p8r2 + $m2p8r3 + $m2p8r5 + $m2p8r7 + $m2p8r8 + $m2p8r9 + $m2p9r3 + $m2p10r3 + $m2p10r4 + $m2p10r6 + $m2p12r2 + $m2p12r5 + $m2p14r4 + $m2p14r6;
		$i3_ptos_pond = $i3_op1_ptos_pond + ($m2p6r1*2) + ($m2p7r4*2) + ($m2p8r2*2) + ($m2p8r3*1) + ($m2p8r5*2) + ($m2p8r7*1) + ($m2p8r8*2) + ($m2p8r9*2) + ($m2p9r3*2) + ($m2p10r3*1) + ($m2p10r4*2) + ($m2p10r6*1) + ($m2p12r2*1) + ($m2p12r5*1) + ($m2p14r4*1) + ($m2p14r6*1);
		$this->setArrIndicador(3, $i3_ptos, $i3_ptos_pond);
		$arr_res_semaforo[3] = $this->getArrIndicador();
		
		//4. Mercados a los que se dirigen
		$i4_ptos = $m5p1 + $m5p3;
		$i4_ptos_pond = ($m5p1*1) + ($m5p3*1);
		$this->setArrIndicador(4, $i4_ptos, $i4_ptos_pond);
		$arr_res_semaforo[4] = $this->getArrIndicador();
		
		//5. Cercanía al productor
		$i5_ptos = $m5p2;
		$i5_ptos_pond = $m5p2*1;
		$this->setArrIndicador(5, $i5_ptos, $i5_ptos_pond);
		$arr_res_semaforo[5] = $this->getArrIndicador();
		
		//6. Acondicionamiento. Suma de servicios
		$i6_ptos = $m2p9r5 + $m5p8;
		$i6_ptos_pond = ($m2p9r5*1) + ($m5p8*1);
		$this->setArrIndicador(6, $i6_ptos, $i6_ptos_pond);
		$arr_res_semaforo[6] = $this->getArrIndicador();
		
		//7. Control administrativo
		$i7_ptos = $m2p7r6 + $m2p8r1 + $m2p9r1 + $m2p10r1 + $m2p13r1 + $m3p1 + $m3p3 + $m3p5 + $m3p6 + $m6p6;
		$i7_ptos_pond = ($m2p7r6*1) + ($m2p8r1*2) + ($m2p9r1*2) + ($m2p10r1*2) + ($m2p13r1*2) + ($m3p1*1) + ($m3p3*1) + ($m3p5*2) + ($m3p6*1) + ($m6p6*1);
		$this->setArrIndicador(7, $i7_ptos, $i7_ptos_pond);
		$arr_res_semaforo[7] = $this->getArrIndicador();
		
		$this->arr_op_indicador = $arr_res_semaforo;
	}
	private function getArrOpIndicador(){
		return $this->arr_op_indicador;
	}
	private function setArrIndicador($indicador_id, $i_ptos, $i_ptos_pond){
		
		switch($indicador_id){
			case 1:
				$titulo = '1. Acceso al financiamiento';
				$num_tot_reactivos = 9;
				$num_reactivos_val_normal = 6;
				$valor_5 = 5;
				$num_reactivos_val_2 = 3;
				$valor_doble = 10;
				break;
			case 2:
				$titulo = '2. Nivel de construcción organizativo';
				$persona_tipo = $this->persona_tipo;
				if($persona_tipo==1){
					//Personas físicas
					$num_tot_reactivos = 4;
					$num_reactivos_val_normal = 3;
					$valor_5 = 5;
					$num_reactivos_val_2 = 1;
					$valor_doble = 10;
				}elseif($persona_tipo==2){
					//Personas morales
					$num_tot_reactivos = 9;
					$num_reactivos_val_normal = 3;
					$valor_5 = 5;
					$num_reactivos_val_2 = 6;
					$valor_doble = 10;
				}else{
					$num_tot_reactivos = 0;
					$num_reactivos_val_normal = 0;
					$valor_5 = 0;
					$num_reactivos_val_2 = 0;
					$valor_doble = 0;
				}
				
				break;
			case 3:
				$titulo = '3. Prácticas de conservación y buenas prácticas de almacenamiento';
				$num_tot_reactivos = 17;
				$num_reactivos_val_normal = 8;
				$valor_5 = 5;
				$num_reactivos_val_2 = 9;
				$valor_doble = 10;
				break;
			case 4:
				$titulo = '4. Mercados a los que se dirigen';
				$num_tot_reactivos = 2;
				$num_reactivos_val_normal = 2;
				$valor_5 = 5;
				$num_reactivos_val_2 = 0;
				$valor_doble = 10;
				break;
			case 5:
				$titulo = '5. Cercanía al productor';
				$num_tot_reactivos = 1;
				$num_reactivos_val_normal = 1;
				$valor_5 = 5;
				$num_reactivos_val_2 = 0;
				$valor_doble = 10;
				break;
			case 6:
				$titulo = '6. Acondicionamiento. Suma de servicios';
				$num_tot_reactivos = 2;
				$num_reactivos_val_normal = 2;
				$valor_5 = 5;
				$num_reactivos_val_2 = 0;
				$valor_doble = 10;
				break;
			case 7:
				$titulo = '7. Control administrativo';
				$num_tot_reactivos = 10;
				$num_reactivos_val_normal = 5;
				$valor_5 = 5;
				$num_reactivos_val_2 = 5;
				$valor_doble = 10;
				break;
				default:
					$titulo = '';
					$num_tot_reactivos = 0;
					$num_reactivos_val_normal = 0;
					$valor_5 = 0;
					$num_reactivos_val_2 = 0;
					$valor_doble = 0;
					$log = new Log();
					$log->setRegLog("cuestionario_id", $this->cuestionario_id, "Semaforo.class.php", "Error", "Id de indicador no identificado");
					
		}
		$ptos_maximos = ($num_reactivos_val_normal*$valor_5);
		$porc_logros = op_division($i_ptos_pond, $ptos_maximos);
		
		$arr_indicador = array(
				'id'=>$indicador_id,
				'titulo'=>$titulo,
				'ptos'=>$i_ptos,
				'ptos_pond'=>$i_ptos_pond,
				'num_tot_reactivos'=>$num_tot_reactivos,
				'num_reactivos_val_normal'=>$num_reactivos_val_normal,
				'valor_5'=>$valor_5,
				'num_reactivos_val_2'=>$num_reactivos_val_2,
				'valor_doble'=>$valor_doble,
				'ptos_maximos'=>$ptos_maximos,
				'porc_logros'=>$porc_logros,
		);
		
		$this->arr_indicador = $arr_indicador;
		
		
	}
	private function getArrIndicador() {
		return $this->arr_indicador;
	}
}
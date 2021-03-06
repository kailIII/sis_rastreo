<?php
/**
*@package pXP
*@file gen-MODLicencia.php
*@author  (admin)
*@date 15-06-2017 17:50:08
*@description Clase que envia los parametros requeridos a la Base de datos para la ejecucion de las funciones, y que recibe la respuesta del resultado de la ejecucion de las mismas
*/

class MODLicencia extends MODbase{
	
	function __construct(CTParametro $pParam){
		parent::__construct($pParam);
	}
			
	function listarLicencia(){
		//Definicion de variables para ejecucion del procedimientp
		$this->procedimiento='ras.ft_licencia_sel';
		$this->transaccion='RAS_LICEN_SEL';
		$this->tipo_procedimiento='SEL';//tipo de transaccion
				
		//Definicion de la lista del resultado del query
		$this->captura('id_licencia','int4');
		$this->captura('estado_reg','varchar');
		$this->captura('calificacion_curso','numeric');
		$this->captura('id_responsable','int4');
		$this->captura('fecha_autoriz','date');
		$this->captura('fecha_curso','date');
		$this->captura('nro_licencia','varchar');
		$this->captura('fecha_exp','date');
		$this->captura('tipo','varchar');
		$this->captura('fecha_reg','timestamp');
		$this->captura('usuario_ai','varchar');
		$this->captura('id_usuario_reg','int4');
		$this->captura('id_usuario_ai','int4');
		$this->captura('fecha_mod','timestamp');
		$this->captura('id_usuario_mod','int4');
		$this->captura('usr_reg','varchar');
		$this->captura('usr_mod','varchar');
		
		//Ejecuta la instruccion
		$this->armarConsulta();
		$this->ejecutarConsulta();
		
		//Devuelve la respuesta
		return $this->respuesta;
	}
			
	function insertarLicencia(){
		//Definicion de variables para ejecucion del procedimiento
		$this->procedimiento='ras.ft_licencia_ime';
		$this->transaccion='RAS_LICEN_INS';
		$this->tipo_procedimiento='IME';
				
		//Define los parametros para la funcion
		$this->setParametro('estado_reg','estado_reg','varchar');
		$this->setParametro('calificacion_curso','calificacion_curso','numeric');
		$this->setParametro('id_responsable','id_responsable','int4');
		$this->setParametro('fecha_autoriz','fecha_autoriz','date');
		$this->setParametro('fecha_curso','fecha_curso','date');
		$this->setParametro('nro_licencia','nro_licencia','varchar');
		$this->setParametro('fecha_exp','fecha_exp','date');
		$this->setParametro('tipo','tipo','varchar');

		//Ejecuta la instruccion
		$this->armarConsulta();
		$this->ejecutarConsulta();

		//Devuelve la respuesta
		return $this->respuesta;
	}
			
	function modificarLicencia(){
		//Definicion de variables para ejecucion del procedimiento
		$this->procedimiento='ras.ft_licencia_ime';
		$this->transaccion='RAS_LICEN_MOD';
		$this->tipo_procedimiento='IME';
				
		//Define los parametros para la funcion
		$this->setParametro('id_licencia','id_licencia','int4');
		$this->setParametro('estado_reg','estado_reg','varchar');
		$this->setParametro('calificacion_curso','calificacion_curso','numeric');
		$this->setParametro('id_responsable','id_responsable','int4');
		$this->setParametro('fecha_autoriz','fecha_autoriz','date');
		$this->setParametro('fecha_curso','fecha_curso','date');
		$this->setParametro('nro_licencia','nro_licencia','varchar');
		$this->setParametro('fecha_exp','fecha_exp','date');
		$this->setParametro('tipo','tipo','varchar');

		//Ejecuta la instruccion
		$this->armarConsulta();
		$this->ejecutarConsulta();

		//Devuelve la respuesta
		return $this->respuesta;
	}
			
	function eliminarLicencia(){
		//Definicion de variables para ejecucion del procedimiento
		$this->procedimiento='ras.ft_licencia_ime';
		$this->transaccion='RAS_LICEN_ELI';
		$this->tipo_procedimiento='IME';
				
		//Define los parametros para la funcion
		$this->setParametro('id_licencia','id_licencia','int4');

		//Ejecuta la instruccion
		$this->armarConsulta();
		$this->ejecutarConsulta();

		//Devuelve la respuesta
		return $this->respuesta;
	}
			
}
?>
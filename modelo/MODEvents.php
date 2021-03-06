<?php
/**
*@package pXP
*@file gen-MODEvents.php
*@author  (admin)
*@date 15-06-2017 20:34:28
*@description Clase que envia los parametros requeridos a la Base de datos para la ejecucion de las funciones, y que recibe la respuesta del resultado de la ejecucion de las mismas
*/

class MODEvents extends MODbase{
	
	function __construct(CTParametro $pParam){
		parent::__construct($pParam);
	}
			
	function listarEvents(){
		//Definicion de variables para ejecucion del procedimientp
		$this->procedimiento='ras.ft_events_sel';
		$this->transaccion='PB_EVENT_SEL';
		$this->tipo_procedimiento='SEL';//tipo de transaccion
				
		//Definicion de la lista del resultado del query
		$this->captura('id','int4');
		$this->captura('geofenceid','int4');
		$this->captura('deviceid','int4');
		$this->captura('servertime','timestamp');
		$this->captura('attributes','varchar');
		$this->captura('type','varchar');
		$this->captura('positionid','int4');
		$this->captura('latitude','float8');
		$this->captura('longitude','float8');
		$this->captura('desc_type','varchar');
		
		//Ejecuta la instruccion
		$this->armarConsulta();
		$this->ejecutarConsulta();
		
		//Devuelve la respuesta
		return $this->respuesta;
	}
			
	function insertarEvents(){
		//Definicion de variables para ejecucion del procedimiento
		$this->procedimiento='ras.ft_events_ime';
		$this->transaccion='PB_EVENT_INS';
		$this->tipo_procedimiento='IME';
				
		//Define los parametros para la funcion
		$this->setParametro('geofenceid','geofenceid','int4');
		$this->setParametro('deviceid','deviceid','int4');
		$this->setParametro('servertime','servertime','timestamp');
		$this->setParametro('attributes','attributes','varchar');
		$this->setParametro('type','type','varchar');
		$this->setParametro('positionid','positionid','int4');

		//Ejecuta la instruccion
		$this->armarConsulta();
		$this->ejecutarConsulta();

		//Devuelve la respuesta
		return $this->respuesta;
	}
			
	function modificarEvents(){
		//Definicion de variables para ejecucion del procedimiento
		$this->procedimiento='ras.ft_events_ime';
		$this->transaccion='PB_EVENT_MOD';
		$this->tipo_procedimiento='IME';
				
		//Define los parametros para la funcion
		$this->setParametro('id','id','int4');
		$this->setParametro('geofenceid','geofenceid','int4');
		$this->setParametro('deviceid','deviceid','int4');
		$this->setParametro('servertime','servertime','timestamp');
		$this->setParametro('attributes','attributes','varchar');
		$this->setParametro('type','type','varchar');
		$this->setParametro('positionid','positionid','int4');

		//Ejecuta la instruccion
		$this->armarConsulta();
		$this->ejecutarConsulta();

		//Devuelve la respuesta
		return $this->respuesta;
	}
			
	function eliminarEvents(){
		//Definicion de variables para ejecucion del procedimiento
		$this->procedimiento='ras.ft_events_ime';
		$this->transaccion='PB_EVENT_ELI';
		$this->tipo_procedimiento='IME';
				
		//Define los parametros para la funcion
		$this->setParametro('id','id','int4');

		//Ejecuta la instruccion
		$this->armarConsulta();
		$this->ejecutarConsulta();

		//Devuelve la respuesta
		return $this->respuesta;
	}

	function listarEventosRango(){
		//Definicion de variables para ejecucion del procedimientp
		$this->procedimiento='ras.ft_events_sel';
		$this->transaccion='PB_EVRAN_SEL';
		$this->tipo_procedimiento='SEL';//tipo de transaccion

		//Define los parametros para la funcion
		$this->setParametro('ids','ids','varchar');
		$this->setParametro('events','events','varchar');
		$this->setParametro('fecha_ini','fecha_ini','varchar');
		$this->setParametro('fecha_fin','fecha_fin','varchar');

		//Definicion de la lista del resultado del query
		$this->captura('id_equipo','integer');
		$this->captura('uniqueid','varchar');
		$this->captura('desc_equipo','text');
		$this->captura('placa','varchar');
		$this->captura('tipo_equipo','varchar');
		$this->captura('marca','varchar');
		$this->captura('modelo','varchar');
        $this->captura('eventid','integer');
        $this->captura('devicetime','timestamp');
        $this->captura('deviceid','integer');
        $this->captura('attributes','varchar');
        $this->captura('desc_type','varchar');
        $this->captura('latitude','float8');
        $this->captura('longitude','float8');
        $this->captura('altitude','float8');
        $this->captura('speed','float8');
        $this->captura('course','float8');
		$this->captura('address','varchar');
		$this->captura('attributes_pos','varchar');
		$this->captura('accuracy','float8');
				
		//Ejecuta la instruccion
		$this->armarConsulta();
		$this->ejecutarConsulta();
		
		//Devuelve la respuesta
		return $this->respuesta;
	}
			
}
?>
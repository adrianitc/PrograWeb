<?php
class Classasistenteseventos{

	private $id_asistente_evento;
	private $id_usuario;
	private $id_actividad;
	private $fecha_registro;
	
	//----------------------------------------------
	
	public function get_id_asistente_evento(){
		return $this->id_asistente_evento;
	}

	public function get_id_usuario(){
		return $this->id_usuario;
	}
	
	public function get_id_actividad(){
		return $this->id_actividad;
	}
	
	public function get_fecha_registro(){
		return $this->fecha_registro;
	}
	
	//----------------------------------------------
	
	
	public function set_id_asistente_evento( $valor ){
                $this->id_asistente_evento = $valor;
        }
	
	public function set_id_usuario( $valor ){
                $this->id_usuario= $valor;
        }
	
	public function set_id_actividad( $valor ){
                $this->id_actividad = $valor;
        }
		
	public function set_fecha_registro( $valor ){
                $this->fecha_registro = $valor;
        }	
		
}
?>
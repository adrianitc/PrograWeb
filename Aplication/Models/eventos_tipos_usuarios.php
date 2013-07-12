<?php
class Classeventostiposusuarios{
    
	private $id_evento_tipo_usuario;
	private $id_evento;
	private $id_tipo_usuario;
	
	//----------------------------------------------
	
	public function get_id_evento_tipo_usuario(){
		return $this->id_evento_tipo_usuario;
	}

	public function get_id_evento(){
		return $this->id_evento;
	}
	
	public function get_id_tipo_usuario(){
		return $this->id_tipo_usuario;
	}
	
	//----------------------------------------------
	
	
	public function set_id_evento_tipo_usuario( $valor ){
                $this->id_evento_tipo_usuario = $valor;
        }
	
	public function set_id_evento( $valor ){
                $this->id_evento= $valor;
        }
	
	public function set_id_tipo_usuario( $valor ){
                $this->id_tipo_usuario = $valor;
        }
}
?>
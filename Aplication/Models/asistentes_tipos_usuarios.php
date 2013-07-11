<?php

	private $id_usuario_tipo_usuario;
	private $id_usuario;
	private $id_tipo_usuario;
	
	//----------------------------------------------
	
	public function get_id_usuario_tipo_usuario(){
		return this->$id_usuario_tipo_usuario;
	}

	public function get_id_usuario(){
		return this->$id_usuario;
	}
	
	public function get_id_tipo_usuario(){
		return this->$id_tipo_usuario;
	}
	
	//----------------------------------------------
	
	
	public function set_id_usuario_tipo_usuario( $valor ){
                this->$id_usuario_tipo_usuario = $valor;
        }
	
	public function set_id_usuario( $valor ){
                this->$id_usuario= $valor;
        }
	
	public function set_id_tipo_usuario( $valor ){
                this->$id_tipo_usuario = $valor;
        }
}
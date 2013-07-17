<?php

class EventoTipoUsuario extends Modelo{
    public $nombre_tabla='eventos_tipos_usuarios';
    public $pk = 'id';
    public $atributos = array(
                         'id_evento'=>array(),
                         'id_tipo_usuario'=>array()
    );

    private $id_evento;
    private $id_tipo_usuario;
    
    function _contruct(){
        $this->Modelo();
    }
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value){
               $rs[$key]=  $this->$key;
        }
        return $rs;
    }

    //..
    
    public function get_id_evento(){
        return $this->id_evento;
    }
    public function set_id_evento($var){
        $this->id_evento=$var;
    }
    public function get_id_tipo_usuario(){
        return $this->id_tipo_usuario;
    }
    public function set_id_tipo_usuario($var){
        $this->id_tipo_usuario=$var;
    }
  
}

?>

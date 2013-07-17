<?php


class AsistenteTipoUsuario extends Modelo{
    public $nombre_tabla='asistentes_tipos_usuarios';
    public $pk = 'id';
    public $atributos = array(
                         'id_usuario'=>array(),
                         'id_tipo_usuario'=>array()
    );

    private $id_usuario;
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
    
    public function get_id_usuario(){
        return $this->id_usuario;
    }
    public function set_id_usuario($var){
        $this->id_usuario=$var;
    }
    public function get_id_tipo_usuario(){
        return $this->id_tipo_usuario;
    }
    public function set_id_tipo_usuario($var){
        $this->id_tipo_usuario=$var;
    }    
}

?>

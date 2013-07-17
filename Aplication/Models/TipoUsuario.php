<?php


class TipoUsuario extends Modelo{
    public $nombre_tabla='tipos_usuarios';
    public $pk = 'id';
    public $atributos = array(
                         'tipo'=>array()
    );

    private $tipo;
    
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
    
    public function get_tipo(){
        return $this->tipo;
    }
    public function set_tipo($var){
        $this->tipo=$var;
    }
}

?>

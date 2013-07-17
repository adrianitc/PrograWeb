<?php


class Evento extends Modelo{
    public $nombre_tabla='eventos';
    public $pk = 'id';
    public $atributos = array(
                         'nombre_evento'=>array(),
                         'contacto'=>array(),
                         'cuando'=>array(),
                         'donde'=>array(),
                         'informacion'=>array(),
                         'fecha_inicio'=>array(),
                         'fecha_fin'=>array()
    );

    private $nombre_evento;
    private $contacto;
    private $cuando;
    private $donde;
    private $informacion;
    private $fecha_inicio;
    private $fecha_fin;
    
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
    
    public function get_nombre_evento(){
        return $this->nombre_evento;
    }
    public function set_nombre_evento($var){
        $this->nombre_evento=$var;
    }
    public function get_contacto(){
        return $this->contacto;
    }
    public function set_contacto($var){
        $this->contacto=$var;
    }
    public function get_cuando(){
        return $this->cuando;
    }
    public function set_cuando($var){
        $this->cuando=$var;
    }
    public function get_donde(){
        return $this->donde;
    }
    public function set_donde($var){
        $this->donde=$var;
    }
    public function get_informacion(){
        return $this->informacion;
    }
    public function set_informacion($var){
        $this->informacion=$var;
    }
    public function get_fecha_inicio(){
        return $this->fecha_inicio;
    }
    public function set_fecha_inicio($var){
        $this->fecha_inicio=$var;
    }
     public function get_fecha_fin(){
        return $this->fecha_fin;
    }
    public function set_fecha_fin($var){
        $this->fecha_fin= $var;
    }
}

?>

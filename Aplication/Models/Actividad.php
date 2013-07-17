<?php


class Actividad extends Modelo{
    public $nombre_tabla='actividades';
    public $pk = 'id';
    public $atributos = array(
                         'id_evento'=>array(),
                         'nombre_actividad'=>array(),
                         'lugares'=>array(),
                         'precio'=>array(),
                         'descripcion'=>array(),
                         'informacion'=>array(),
                         'id_usuario'=>array()
    );

    private $id_evento;
    private $nombre_actividad;
    private $lugares;
    private $precio;
    private $descripcion;
    private $informacion;
    private $id_usuario;
    
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
    public function get_nombre_actividad(){
        return $this->nombre_actividad;
    }
    public function set_nombre_actividad($var){
        $this->nombre_actividad=$var;
    }
    public function get_lugares(){
        return $this->lugares;
    }
    public function set_lugares($var){
        $this->lugares=$var;
    }
    public function get_precio(){
        return $this->precio;
    }
    public function set_precio($var){
        $this->precio=$var;
    }
    public function get_descripcion(){
        return $this->descripcion;
    }
    public function set_descripcion($var){
        $this->descripcion=$var;
    }
     public function get_informacion(){
        return $this->informacion;
    }
    public function set_informacion($var){
        $this->informacion= $var;
    }
    public function get_id_usuario(){
        return $this->id_usuario;
    }
    public function set_id_usuario($var){
        $this->id_usuario=$var;
    }    
}

?>

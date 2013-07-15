<?php

class Usuarios extends Modelo{
    public $nombre_tabla='usuario_detalle';
    public $pk = 'id';
    public $atributos = array(
                         'nombre'=>array(),
                         'email'=>array(),
                         'password'=>array()
    );


    private $nombre;
    private $email;
    private $password;
    
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
    public function get_nombre(){
        return $this->nombre;
    }
    public function set_nombre($var){
        $this->nombre=$var;
    }
    public function get_email(){
        return $this->email;
    }
    public function set_email($var){
        $this->email=$var;
    }
     public function get_password(){
        return $this->password;
    }
    public function set_password($var){
        
        $this->password=  md5($var);
    }
    
}
?>

<?php

class Usuario extends Modelo{
    public $nombre_tabla='usuario_detalle';
    public $pk = 'id';
    public $atributos = array(
                         'apellido_paterno'=>array(),
                         'apellido_materno'=>array(),
                         'nombre'=>array(),
                         'sexo'=>array(),
                         'edad'=>array(),
                         'email'=>array(),
                         'nctr_rfc'=>array(),
                         'password'=>array()
    );

    private $apellido_paterno;
    private $apellido_materno;
    private $nombre;
    private $sexo;
    private $edad;
    private $email;
    private $nctr_rfc;
    private $password;
    
    
    //function _contruct(){
        //$this->Modelo();
    //}
    function Usuario(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }

    
    public function get_apellido_paterno(){
        return $this->apellido_paterno;
    }
    public function set_apellido_paterno($valor){
        if($this->valida_er('nombre',$valor)){
             $this->apellido_paterno=$valor;
             return true;
         }else
             return false;
    }
    public function get_apellido_materno(){
        return $this->apellido_materno;
    }
    public function set_apellido_materno($valor){
        if($this->valida_er('nombre',$valor)){
             $this->apellido_materno=$valor;
             return true;
         }else
             return false;
    }
    public function get_nombre(){
        return $this->nombre;
    }
    public function set_nombre($valor){
        if($this->valida_er('nombre',$valor)){
             $this->nombre=$valor;
             return true;
         }else
             return false;
    }
    public function get_sexo(){
        return $this->sexo;
    }
    public function set_sexo($var){
        $this->sexo=$var;
    }
    public function get_edad(){
        return $this->edad;
    }
    public function set_edad($valor){
        if($this->valida_er('edad',$valor)){
             $this->edad=$valor;
             return true;
         }else
             return false;
    }
    public function get_email(){
        return $this->email;
    }
    public function set_email($valor){
        if($this->valida_er('email',$valor)){
             $this->email=$valor;
             return true;
         }else
             return false;
    }
     public function get_nctr_rfc(){
        return $this->nctr_rfc;
    }
    public function set_nctr_rfc($valor){
        //$this->password=  md5($var);
        if($this->valida_er('nctr_rfc',$valor)){
             $this->nctr_rfc=$valor;
             return true;
         }else
             return false;
    }
    public function get_password(){
        return $this->password;
    }
    public function set_password($valor){
        if($this->valida_er('password',$valor)){
             $this->password=  md5($valor);
             return true;
         }else
             return false;
    }
    
}
?>

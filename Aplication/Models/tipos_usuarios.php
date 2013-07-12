<?php
class Classtiposusuarios{

    private $id_tipo_usuario,$tipo; 
    
    //----------------------------------------------
    

    public function set_id_tipo_usuario($var) {
        $this->id_tipo_usuario = $var;
    }
    public function set_tipo($var) {
        $this->tipo = $var;
    }

    //----------------------------------------------

    public function get_id_tipo_usuario() {
        return $this->id_tipo_usuario;
    }
    public function get_tipo() {
        return $this->tipo;
    }
}
?>
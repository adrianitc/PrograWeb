class Classusuariodetalle{

    private $id_usuario,$apellido_paterno,$apellido_materno,$nombre,$sexo,$edad,$email,nctr_rfc; 
    

function set_id_usuario($var) {
        $this->id_usuario = $var;
    }
function get_id_usuario() {
        return $this->id_usuario;
    }
function set_apellido_paterno($var) {
        $this->apellido_paterno = $var;
    }
function get_apellido_paterno() {
        return $this->apellido_paterno;
    }
function set_apellido_materno($var) {
        $this->apellido_materno = $var;
    }
function get_apellido_materno() {
        return $this->apellido_materno;
    }
function set_nombre($var) {
        $this->nombre = $var;
    }
function get_nombre() {
        return $this->nombre;
    }
function set_sexo($var) {
        $this->sexo = $var;
    }
function get_sexo() {
        return $this->sexo;
    }
function set_edad($var) {
        $this->edad = $var;
    }
function get_edad() {
        return $this->edad;
    }
function set_email($var) {
        $this->email = $var;
    }
function get_email() {
        return $this->email;
    }
function set_nctr_rfc($var) {
        $this->nctr_rfc = $var;
    }
function get_nctr_rfc() {
        return $this->nctr_rfc;
    }
}
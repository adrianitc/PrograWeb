<?php
include '../Conexion/conexion.php';
class Classusuariodetalle{

    private $id_usuario,$apellido_paterno,$apellido_materno,$nombre,$sexo,$edad,$email,$nctr_rfc; 
    
    function __construct() {
     
    }
    function __establecer($id_usuario,$apellido_paterno,$apellido_materno,$nombre,$sexo,$edad,$email,$nctr_rfc) {
        $this->set_id_usuario($id_usuario);
        $this->set_apellido_paterno($apellido_paterno);
        $this->set_apellido_materno($apellido_materno);
        $this->set_nombre($nombre);
        $this->set_sexo($sexo);
        $this->set_edad($edad);
        $this->set_email($email);
        $this->set_nctr_rfc($nctr_rfc);
    }
    

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
    function insertar() {

        $con = new conexion();
        $db = $con->conectar();
        $id_usu=  $this->get_id_usuario();
        $ape_pat=  $this->get_apellido_paterno();
        $ape_mat=  $this->get_apellido_materno();
        $nom=  $this->get_nombre();
        $sex=  $this->get_sexo();
        $edad=  $this->get_edad();
        $email=  $this->get_email();
        $nctr_rfc=  $this->get_nctr_rfc();
         
        $sql = "insert into usuario_detalle(id_usuario,apellido_paterno,apellido_materno,nombre,sexo,edad,email,nctr_rfc) values ('$id_usu,$ape_pat,$ape_mat,$nom,$sex,$edad,$email,$nctr_rfc);";
        $rs1 = $db->Execute($sql);
        //return $rs;
       echo "cve:" . $this->get_id_usuario();
       return true;
    }
    
    public function consultar() {
        $con = new conexion();
        $db = $con->conectar();
        $sql = "select * from usuario_detalle;";
        $rs = $db->Execute($sql);
        return $rs;
    }

    public function consulta($cve) {
        $con = new conexion();
        $db = $con->conectar();
        $sql = "select * from usuario_detalle  where id_usuario=$cve;";
        $rs = $db->Execute($sql);
        return $rs;
    }

    public function borrar($cve) {
        $con = new conexion();
        $db = $con->conectar();
        $sql = "delete from usuario_detalle  where id_usuario=$cve;";
        $rs = $db->Execute($sql);
        return $rs;
    }
/*
    function actualizar($Idhot,$dom,$tel,$numHab,$alber,$num_Rest,$num_bar) {

        $con = new conexion();
        $bd = $con->conecta();
        $sql = "update cliente set cliente Idcliente=$Idcli, nombre=$nom, direccion=$direc, telefono='$tele;";
        return $bd->Execute($sql);
    }
*/

}
?>
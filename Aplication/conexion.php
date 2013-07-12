<?php

include ('libs/adodb5/adodb.inc.php');
class conexion {
    private $db='mysql',$servidor='localhost', $user='root', $password='', $based='itc';



       public function conectar() {
           $db = ADONewConnection($this->db); # eg 'mysql' or 'postgres'
           # $db->debug = true;
           $db->Connect($this->servidor, $this->user, $this->password, $this->based);
           return $db;
        }
}
?>


<?php
include ('../Models/Modelo.php');
include ('../Models/Usuario.php');
include ('../libs/adodb5/adodb-pager.inc.php');
include ('../libs/adodb5/adodb.inc.php');

$usuario =new Usuarios();
//$usuario->actualiza(1);
$usuario->elimina();
//$usuario->inserta();
//$rs = $usuario->consulta_datos();
//print_r($rs->GetRows());
$usuario->show_grid(20);
?>

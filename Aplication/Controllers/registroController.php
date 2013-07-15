
<?php
include ('../Models/Modelo.php');
include ('../Models/Usuario.php');
include ('../libs/adodb5/adodb-pager.inc.php');
include ('../libs/adodb5/adodb.inc.php');

$usuario =new Usuarios();
echo '<pre>';
print_r($_POST);
$usuario->set_nombre($_POST['nombre']);
$usuario->set_email($_POST['email']);
$usuario->set_password($_POST['password']);
print_r($usuario->);
//$usuario->actualiza(1);
//$usuario->elimina();
//$usuario->inserta();
//$rs = $usuario->consulta_datos();
//print_r($rs->GetRows());
//$usuario->show_grid(20);
?>

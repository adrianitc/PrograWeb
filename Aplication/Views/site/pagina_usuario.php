<?php
session_start();
if(!isset ($_SESSION['email']))
{
    header('location: login.php');
}
    $conex = mysql_connect("localhost", "root", "")
		or die("No se pudo realizar la conexion");
	mysql_select_db("itc",$conex)
		or die("ERROR con la base de datos");            

    if (!isset($_SESSION["cuenta_paginas"]))
    { 
   	$_SESSION["cuenta_paginas"] = 1; 
    }
    else
    { 
   	$_SESSION["cuenta_paginas"]++; 
    } 
    
    if (!$_SESSION)
    {
        echo 'usuario no autenticado';
    }

$id_usuario = $_SESSION['email'];
$consulta= "SELECT nombre, apellido_paterno, apellido_materno, edad FROM usuario_detalle WHERE email='".$id_usuario."'"; 
$resultado= mysql_query($consulta,$conex) or die (mysql_error());
$datos=mysql_fetch_array($resultado);
$nombre = $datos['nombre'];
$apellido_paterno = $datos['apellido_paterno'];
$edad = $datos['edad'];
?>
<?php
    include('../layouts/header.php');
?>
<html>
    <head>
        <title>Pagina de Usuario</title>
    </head>
    <body>
    <table>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2"><div>Usuario: <span class="Estilo6"><strong><?php echo $nombre;?></strong></span></div></td>
        </tr>
        <tr>
            <td colspan="2"><div><a href="desconectar_usuario.php">Cerrar Sesion</a> </div></td>
        </tr>
        <tr>
            <td colspan="2"><div><h3>PAGINA DE USUARIO</h3></div></td>
        </tr>
        <tr>
            <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2"><div>
            <p>Bienvenido <?php echo $nombre, $apellido_paterno; ?></p>
            <p>Edad: <?php echo $edad; ?></p>
            <?PHP echo "Has recargado la pagina: " . $_SESSION["cuenta_paginas"] . " veces"; ?> 
            </div></td>
        </tr>
    </table>
    </body>
</html>
<?php
    include('../layouts/footer.php');
?>
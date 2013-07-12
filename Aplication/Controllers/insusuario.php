<?php

include '../models/usuariodetalle.php';
    $cveusu= $_POST['id_usuario'];
    $apellidop= $_POST['apellido_paterno'];
    $apellidom= $_POST['apellido_materno'];
    $nomb= $_POST['nombre'];
    $sexo= $_POST['sexo'];
    $edad= $_POST['edad'];
    $email= $_POST['email'];
    $nctr= $_POST['nctr_rfc'];
    
   
     
    $Deusuario = new classusuariodetalle();
    //$Deusuario->_establecer($cveusu,$apellidop,$apellidom,$nomb,$sexo,$edad,$email,$nctr);
    
    $Deusuario->insertar($cveusu,$apellidop,$apellidom,$nomb,$sexo,$edad,$email,$nctr);
if($cveusu==0)
        echo "<script type=''>
           alert( 'Inserción exitosa');
           </script>";
    else
       echo "<script type=''>
           alert( 'No se inserto');
           </script>";

     /*
    switch ($opc) {
    case 1:
          $Deusuario ->insertar();
        

            break;
   case 2:
          $Declien ->borrar($cveclie);

            break;
    case 3:

          $Declien ->actualizar($cveclie, $nomb, $tipo, $dir);
            break;
        default :
            break;
}*/
    
//header("Location:../Views/Tusuario.php");
?>

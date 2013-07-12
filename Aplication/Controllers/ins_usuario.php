<?php

include "../Models/usuario_detalle.php";
    $cveusu= $_POST['id_usuario'];
    $apellidop= $_POST['apellido_paterno'];
    $apellidom= $_POST['apellido_materno'];
    $nomb= $_POST['nombre'];
    $sexo= $_POST['sexo'];
    $edad= $_POST['edad'];
    $email= $_POST['email'];
    $nctr= $_POST['nctr_rfc'];
    
   
     
    $Deusuario = new Classusuariodetalle();
    $Deusuario->establecer($cveusu,$apellidop,$apellidom,$nomb,$sexo,$edad,$email,$nctr);
    
    $val=$Deusuario->insertar();
if($val==true)
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

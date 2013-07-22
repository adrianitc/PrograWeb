<?php
    include ('../../Models/Modelo.php');
    include ('../../Models/Evento.php');
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../Controllers/siteController/registroController.php');
    //include ('../../Models/Valida.php');

    $usuario = new RegistroController();
    if(isset($_POST['usuario'])){
       
        if($usuario->registraUsuario($_POST['usuario'])){
            header("Location: registroCorrecto.php");
            exit();
        }
    }
?>
<?php

include ('../layouts/header.php');

?>
<div class="row">
    <div class="span12">********Derechos********</div>
    <div class="span12">*********Reservados*******</div>
    <div class="span6">
<form action="" method="post">
    <h1 class="reg">Registro de Eventos</h1>
    <table>
                  <tr>
                    <td><label for="usuario[nombre_evento]" class="reg">Nombre del evento:</label></td>
                    <td><input type="text" name="usuario[nombre_evento]" id="usuario[nombre_evento]" size="50" required="required" placeholder="Nombre del evento"/></td>
                  </tr>
                  <tr>
                    <td><label for="usuario[contacto]" class="reg">Contacto:</label></td>
                    <td><textarea name="usuario[contacto]" id="usuario[contacto]" cols="10" rows="10" style="resize:none" required="required" placeholder="Contacto"></textarea></td>
                  </tr>
                  <tr>
                    <td><label for="usuario[cuando]" class="reg">¿Cu&aacute;ndo?:</label></td>
                    <td><textarea name="usuario[cuando]" id="usuario[cuando]" cols="50" rows="10" style="resize:none" required="required" placeholder="Cu&aacute;ndo"></textarea></td>
                  </tr>
                  <tr>
                    <td><label for="usuario[donde]" class="reg">¿D&oacute;nde?:</label></td>
                    <td><textarea name="usuario[donde]" id="usuario[donde]" cols="50" rows="10" style="resize:none" required="required" placeholder="D&oacute;nde"></textarea></td>
                  </tr>
                  <tr>
                    <td><label for="usuario[informacion]" class="reg">Informaci&oacute;n:</label></td>
                    <td><textarea name="usuario[informacion]" id="usuario[informacion]" cols="50" rows="10" style="resize:none" required="required" placeholder="Informaci&oacute;n"></textarea></td>
                  </tr>
                  <tr>
                    <td><label for="fecha_inicio" class="reg">Fecha de inicio</label></td>
                    <td><input type="date" name="fecha_inicio" id="fecha_inicio" required="required"/></td>
                  </tr>
                  <tr>
                    <td><label for="fecha_fin" class="reg">Fecha de finalizaci&oacute;n</label></td>
                    <td><input type="date" name="fecha_fin" id="fecha_fin" required="required"/></td>
                  </tr>
                  <tr>
                    <td><input type="submit" name="registrar" id="registrar" value="REGISTRAR" class="btn btn-success" /></td>
                    <td><input type="reset" name="limpiar" id="limpiar" value="LIMPIAR" class="btn btn-danger"/></td>
                  </tr>
                  </table>
                 </form>
       </div>
       <div class="span6">
       <img src="../img/Registro_nacional.png" alt="registro"/>
       </div>
</div>
<?php

include ('../layouts/footer.php');
?>
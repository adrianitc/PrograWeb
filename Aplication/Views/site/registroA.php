<?php

include ('../layouts/header.php');

?>
<div class="row">
    <div class="span12">********Derechos********</div>
    <div class="span12">*********Reservados*******</div>
    <div class="span6">
<form action="../../controllers/registroControllerA.php" method="POST">
    <h1 class="reg">Registro de Actividades</h1>
    <table>
            <tr>
                <td width="187" height="49"><label for="id_evento" class="reg">Evento al que pertenece:</label></td>
                <td width="317">
                    <select name="id_evento">
                    <option value="0">Selecciona un evento</option>
                    <option value="1">1</option>
                    </select>
              </td>
            </tr>
            <tr>
              <td height="46"><label for="nombre_actividad" class="reg">Nombre de la actividad:</label></td>
              <td><input type="text" name="nombre_actividad" id="nomb" size="30" placeholder="Nombre de la actividad" required="required"/></td>
            </tr>
            <tr>
                <td><label for="lugares" class="reg">Lugares:</label></td>
                <td><input type="number" name="lugares" id="lugares" placeholder="Lugares" required="required"/></td>
            </tr>
            <tr>
                <td><label for="appendedPrependedInput" class="reg">Precio:</label></td>
                <td>
                <div class="input-prepend input-append">
  					<span class="add-on">$</span>
  					<input class="span2" name="precio" id="appendedPrependedInput" type="number" required="required" placeholder="Precio"/>
  					<span class="add-on">.00</span>
				</div></td>
            </tr>
            <tr>
                <td><label for="descripcion" class="reg">Descripci&oacute;n:</label></td>
                <td><textarea name="descripcion" id="descripcion" cols="50" rows="10" style="resize:none" placeholder="Descripci&oacute;n de la actividad" required="required"></textarea></td>
            </tr>
            <tr>
                <td><label for="informacion" class="reg">Informaci&oacute;n:</label></td>
                <td><textarea name="informacion" id="informacion" cols="50" rows="10" style="resize:none" placeholder="Descripci&oacute;n de la actividad" required="required"></textarea></td>
            </tr>
            <tr>
                <td><label for="id_usuario" class="reg">Instructor:</label></td>
                <td>
                    <select name="id_usuario">
                    <option value="0">Selecciona un instructor</option>
                    <option value="1">1</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="registrar" id="registrar" value="REGISTRAR" class="btn btn-success"/></td>
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
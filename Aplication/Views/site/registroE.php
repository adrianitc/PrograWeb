<?php

include ('../layouts/header.php');

?>

<form action="../../controllers/registroControllerE.php" method="post">
    <h1 class="reg">Registro de Eventos</h1>
                  <tr>
                    <td><label for="nombre_evento" class="reg">Nombre del evento:</label></td>
                    <td><input type="text" name="nombre_evento" id="nombre_evento" size="50" required="required" placeholder="Nombre del evento"/></td>
                  </tr>
                  <tr>
                    <td><label for="contacto" class="reg">Contacto:</label></td>
                    <td><textarea name="contacto" id="contacto" cols="10" rows="10" style="resize:none" required="required" placeholder="Contacto"></textarea></td>
                  </tr>
                  <tr>
                    <td><label for="cuando" class="reg">¿Cu&aacute;ndo?:</label></td>
                    <td><textarea name="cuando" id="cuando" cols="50" rows="10" style="resize:none" required="required" placeholder="Cu&aacute;ndo"></textarea></td>
                  </tr>
                  <tr>
                    <td><label for="donde" class="reg">¿D&oacute;nde?:</label></td>
                    <td><textarea name="donde" id="donde" cols="50" rows="10" style="resize:none" required="required" placeholder="D&oacute;nde"></textarea></td>
                  </tr>
                  <tr>
                    <td><label for="informacion" class="reg">Informaci&oacute;n:</label></td>
                    <td><textarea name="informacion" id="informacion" cols="50" rows="10" style="resize:none" required="required" placeholder="Informaci&oacute;n"></textarea></td>
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
                 </form>
<?php

include ('../layouts/footer.php');
?>
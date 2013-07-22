<?php

include ('../layouts/header.php');

?>
<div class="row">
    <div class="span12">********Derechos********</div>
    <div class="span12">*********Reservados*******</div>
    <div class="span6">
<form action="../../controllers/registroControllerTU.php" method="POST">
    <h1 class="reg">Tipos de Usuarios</h1>
    <table>
                <tr>
                    <td>
                        <label for="tipo" class="reg">Tipo de Usuario:</label>
                    </td>
                    <td>
                        <input id="tipo" name="tipo" type="text" placeholder="Tipo de usuario" required="required" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="ENVIAR" class="btn btn-success" />
                    </td>
                    <td>
                        <input type="reset" value="BORRAR" class="btn btn-danger" />
                    </td>
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
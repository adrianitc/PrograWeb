<?php

include ('../layouts/header.php');

?>
<form action="../../controllers/registroControllerTU.php" method="POST">
    <h1 class="reg">Tipos de Usuarios</h1>
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
            </form>
<?php

include ('../layouts/footer.php');
?>
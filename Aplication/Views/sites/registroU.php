<?php

include ('../layouts/header.php');

?>

<form action="../../controllers/registroController.php" method="POST">
    <h1 class="reg">Registro de Usuarios</h1>
                <tr>
                    <td><label for="apellido_paterno" class="reg">Apellido Paterno:</label></td>
                    <td><input type="text" name="apellido_paterno" id="apellido_paterno" size="20" placeholder="Apellido Paterno" required="required"/></td>
                </tr>
                <tr>
                    <td><label for="apellido_materno" class="reg">Apellido Materno:</label></td>
                    <td><input type="text" name="apellido_materno" id="apellido_materno" size="20" placeholder="Apellido Materno" required="required"/></td>
                </tr>
                <tr>
                    <td><label for="nombre" class="reg">Nombre(s):</label></td>
                    <td><input type="text" name="nombre" id="nombre" size="20" placeholder="Nombre(s)" required="required"/></td>
                </tr>
                <tr>
                    <td><label class="reg">Sexo:</label></td>
                    <td>
                        <label class="reg">
                            <input type="radio" name="sexo" id="sexo" value="M"/>M
                        </label>
                        <label class="reg">
                            <input type="radio" name="sexo" id="sexo" value="F"/>F
                        </label>
                    </td>
                </tr>
                <tr>
                    <td><label for="edad" class="reg">Edad:</label></td>
                    <td><input type="number" name="edad" id="edad" size="2" maxlength="2" placeholder="Edad" required="required"/></td>
                </tr>
                <tr>
                    <td><label for="email" class="reg">Email:</label></td>
                    <td><input type="email" name="email" id="email" placeholder="Email" required="required"/></td>
                </tr>
                <tr>
                    <td><label for="nctr_rfc" class="reg">N&uacute;mero de Control o RFC</label></td>
                    <td><input type="text" name="nctr_rfc" id="nctr_rfc" size="13" placeholder="No. control o RFC" required="required"/></td>
                
                </tr>
                <tr>
                    
                    <td><input type="submit" name="registrar" id="registrar" value="REGISTRAR" class="btn btn-success"/></td>
                    <td><input type="reset" name="limpiar" id="limpiar" value="LIMPIAR" class="btn btn-danger"/></td>
                </tr>
                </form>
<?php

include ('../layouts/footer.php');
?>

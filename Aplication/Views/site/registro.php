<?php
    include ('../../models/Modelo.php');
    include ('../../models/Usuario.php');
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../controllers/siteController/registroController.php');

    $usuario = new RegistroController();
    if(isset($_POST['usuario'])){
       
        if($usuario->registraUsuario($_POST['usuario'])){
            header("Location: registroCorrecto.php");
            exit();
        }
    }
?>

<?php
    include('../layouts/header.php');
?>

<form action="" method="POST">
    <h1 class="reg">Registro de Usuarios</h1>
                <tr>
                    <td><label for="usuario[apellido_paterno]" class="reg">Apellido Paterno:</label></td>
                    <td><input type="text" name="usuario[apellido_paterno]" id="usuario[apellido_paterno]" size="20" placeholder="Apellido Paterno" required="required"/></td>
                </tr>
                <tr>
                    <td><label for="usuario[apellido_materno]" class="reg">Apellido Materno:</label></td>
                    <td><input type="text" name="usuario[apellido_materno]" id="usuario[apellido_materno]" size="20" placeholder="Apellido Materno" required="required"/></td>
                </tr>
                <tr>
                    <td><label for="usuario[nombre]" class="reg">Nombre(s):</label></td>
                    <td><input type="text" name="usuario[nombre]" id="usuario[nombre]" size="20" placeholder="Nombre(s)" required="required"/></td>
                </tr>
                <tr>
                    <td><label for="usuario[sexo]" class="reg">Sexo:</label></td>
                    <td>
                        <label class="reg">
                            <input type="radio" name="usuario[sexo]" id="usuario[sexo]" value="M"/>M
                        </label>
                        <label class="reg">
                            <input type="radio" name="usuario[sexo]" id="usuario[sexo]" value="F"/>F
                        </label>
                    </td>
                </tr>
                <tr>
                    <td><label for="usuario[edad]" class="reg">Edad:</label></td>
                    <td><input type="number" name="usuario[edad]" id="usuario[edad]" size="2" maxlength="2" placeholder="Edad" required="required"/></td>
                </tr>
                <tr>
                    <td><label for="usuario[email]" class="reg">Email:</label></td>
                    <td><input type="email" name="usuario[email]" id="usuario[email]" placeholder="Email" required="required"/></td>
                </tr>
                <tr>
                    <td><label for="usuario[nctr_rfc]" class="reg">N&uacute;mero de Control o RFC</label></td>
                    <td><input type="text" name="usuario[nctr_rfc]" id="usuario[nctr_rfc]" size="13" placeholder="No. control o RFC" required="required"/></td>
                
                </tr>
                <tr>
                    
                    <td><input type="submit" name="registrar" id="registrar" value="REGISTRAR" class="btn btn-success"/></td>
                    <td><input type="reset" name="limpiar" id="limpiar" value="LIMPIAR" class="btn btn-danger"/></td>
                </tr>
                </form>
  
                
              <img src="../bootstrap/img/Registro_nacional.png" alt="registro"/>
               
   
<?php
include('../layouts/footer.php');
?>
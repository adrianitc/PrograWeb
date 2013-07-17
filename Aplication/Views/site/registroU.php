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

<div class="row">
<div class="span12">********************</div>
<div class="span12">********************</div>
<div class="span6">
    <form 
        action="" 
        method="POST">
        
        
                   <label for="usuario[apellido_paterno]">Apellido Paterno:</label>
                   <input type="text" id="usuario[apellido_paterno]" name="usuario[apellido_paterno]" placeholder="Apellido Paterno" required="required"/>
                
                   <label for="usuario[apellido_materno]">Apellido Materno:</label>
                   <input type="text" id="usuario[apellido_materno]" name="usuario[apellido_materno]" placeholder="Apellido Materno" required="required"/>
               
                   <label for="usuario[nombre]">Nombre(s):</label>
                   <input type="text" id="usuario[nombre]" name="usuario[nombre]" placeholder="Nombre(s)" required="required"/>
                
                   <label for="usuario[sexo]">Sexo:</label>
                   <input type="radio" id="usuario[sexo]" name="usuario[sexo]" value="M"/>M
                   <input type="radio" id="usuario[sexo]" name="usuario[sexo]" value="F"/>F
                 
                   <label for="usuario[edad]">Edad:</label>
                   <input type="number" id="usuario[edad]" name="usuario[edad]" maxlength="2" placeholder="Edad" required="required"/>
               
                   <label for="usuario[email]" class="reg">Email:</label>
                   <input type="email" id="usuario[email]" name="usuario[email]" placeholder="Email" required="required"/>
                
                   <label for="usuario[nctr_rfc]" class="reg">N&uacute;mero de Control o RFC</label>
                   <input type="text" id="usuario[nctr_rfc]" name="usuario[nctr_rfc]" size="13" placeholder="No. control o RFC" required="required"/>
                
        <input type="submit" value="Registrar" class="btn btn-primary"/> 
    </form>
              
    
          </div>
          <div class="span6">
              <img src="../img/Registro_nacional.png" alt="registro"/>
          </div>
    </div>
    

<?php
include('../layouts/footer.php');
?>

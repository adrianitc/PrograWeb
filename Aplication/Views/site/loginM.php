<?php
session_start();
if(isset ($_SESSION['email']))
{
    header('location: pagina_usuario.php');
}
?>
<?php
    include('../layouts/header.php');
    
?>
<div class="row">
    <div class="span12"><h6 class="reg">********Derechos********</h6></div>
    <div class="span12"><h6 class="reg">*********Reservados*******</h6></div>
    <div class="span6">

<div class="login">
        
          <img src="../img/h.gif" alt="h" />
            <img src="../img/o.gif" alt="o" />
            <img src="../img/l.gif" alt="l" />
            <img src="../img/a.gif" alt="a" />

          
            
          
        
      </div>
  
         </div>
    <form action="script_acceso_usuario.php" method="POST">
        <div class="span6">
            <div class="login-icon">
            <img src="../img/LoginRed.jpg" alt="Welcome to Mail App" />
            <h4>Welcome to <small>Login Session</small></h4>
          </div>
            <div class="control-group">
              <input type="text" name="usuario" class="login-field" value="" placeholder="Introduce tu email" id="login-name" />
              <label class="login-field-icon fui-user" for="login-name"></label>
            </div>

            <div class="control-group">
              <input type="password" name="contrasena" class="login-field" value="" placeholder="Contraseña" id="login-pass" />
              <label class="login-field-icon fui-lock" for="password"></label>
            </div>

            <input type="submit" name="Login" id="Login" value="LOGIN" class="btn btn-primary"/>
            <a class="login-link" href="#">Lost your password?</a>
        </div>
         </form>
    </div>
<?php
    include('../layouts/footer.php');
?>
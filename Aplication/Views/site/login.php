<?php
session_start();
    //include('../../Models/Valida.php');
     include ('../../Models/Modelo.php');
    include ('../../Models/Usuario.php');
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../Controllers/siteController/loginController.php');
    
    if(isset($_POST['email'])){
        $login=new loginController();
        $login->valida_usuario($_POST['email'],$_POST['password']);
    }
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
    <form action="" method="POST">
        <div class="span6">
            <div class="login-icon">
            <img src="../img/LoginRed.jpg" alt="Welcome to Mail App" />
            <h4>Welcome to <small>Login Session</small></h4>
          </div>
            <div class="control-group">
              <input type="text" name="email" class="login-field" value="" placeholder="Introduce tu email" id="email" />
              <label class="login-field-icon fui-user" for="email"></label>
            </div>

            <div class="control-group">
              <input type="password" name="password" class="login-field" value="" placeholder="Contraseña" id="password" />
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
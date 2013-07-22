<?php include $_SERVER['DOCUMENT_ROOT'].'/PW/PrograWeb/Aplication/config.ini.php';?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Eventos Itcelaya</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../bootstrap/css/app.css" rel="stylesheet">
    
    
    <script src="../bootstrap/js/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <link href="../bootstrap/css/mihoja.css" rel="stylesheet" />
    
  </head>
  <body class="formul">
  
         
<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Eventos</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="<?php echo BASEURL;?>views/site/inicio.php">Inicio</a></li>
              <li><a href="../site/login.php">Login</a></li>
              <li><a href="#contact">Contacto</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registro<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo BASEURL;?>views/site/registro.php">Usuarios</a></li>
                  <li><a href="<?php echo BASEURL;?>views/site/registroE.php">Eventos</a></li>
                  <li><a href="<?php echo BASEURL;?>views/site/registroA.php">Actividades</a></li>
                  <li><a href="<?php echo BASEURL;?>views/site/registroTU.php">Tipo de Usuario</a></li>
                  <li><a href="<?php echo BASEURL;?>views/site/registroETU.php">Evento Tipo de Usuario</a></li>
                  <li><a href="<?php echo BASEURL;?>views/site/registroATU.php"</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Proxima mente</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo BASEURL;?>views/admin/usuarios.php">Usuarios</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Proxima mente</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
              <?php if(isset($_SESSION['nombre'])):?> 
              <form class="navbar-form pull-right" method="POST"
                    action="<?php echo BASEURL;?>views/site/login.php">
              <input class="span2" type="text" placeholder="Email" name="email" id="email">
              <input class="span2" type="password" placeholder="Password" name="password" id="password">
              <button type="submit" class="btn">Sign in</button>
            </form>
              <?php else:?>
              <?php endif;?>
          </div><!--/.nav-collapse -->
        </div>
      </div>
</div>
      
<div class="container">
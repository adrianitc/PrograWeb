<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro Usuarios</title>
   
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet"/>
    <link href="../bootstrap/css/mihoja.css" rel="stylesheet" />
    
</head>

<body class="formul">
	<div class="container">
        <div class="navbar navbar-inverse navbar-fixed-top">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">SITEC 2013</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li><a href="../site/inicio.php">INICIO</a></li>
                <li class="active"><a href="../site/registro.php" class="menu">Registro Usuarios</a></li>
                <li><a href="../site/registroE.php" class="menu">Registro Eventos</a></li>
                <li><a href="../site/registroA.php" class="menu">Registro Actividades</a></li>
                <li><a href="../site/registroTU.php" class="menu">Registro TU</a></li>
                <li><a href="../site/registroETU.php" class="menu">Registro ETU</a></li>
                <li><a href="../site/registroATU.php" class="menu">Registro ATU</a></li>
                <li><a href="../admin/usuarios.php">Usuarios</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->
        <div class="container registro">
            <table width="514" height="152" border="0">

<?php 
    session_start();

    if ($_SESSION['nombre'])
    {	
	session_destroy();	
        header("Location: login.php");
    }
    else
    {
	echo 'No ha iniciado ninguna sesion, por favor registrarse';        
    }
?>

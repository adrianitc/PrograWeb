<?php

class AdminController {

    function AdminController(){

        
    }
    
    public function lista_usuarios(){
        $usuario = new Usuario();
        $usuario->show_grid();
    }
    public function lista_eventos(){
        $usuario = new Evento();
        $usuario->show_gridE();
    }
    
    
}  

?>

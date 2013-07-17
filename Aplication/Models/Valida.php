<?php


class Valida {
   private $tiposV=array('nombre'=>"/^[a-zA-Z]+$/",
                         'edad'=>"/^[0-9]+$/",
                         'email'=>"/^[a-zA-Z0-9]+[a-zA-Z0-9\/-_]*@[a-zA-Z0-9]+\.[a-zA-Z]+\.?[a-zA-Z]+$/",
                         'nctr_rfc'=>"/^[a-zA-Z0-9]+$/");
   public function valida_er($tipo,$valor){
       $match = preg_match($this->tiposV[$tipo], $valor);
       return $match;
   }
}

?>

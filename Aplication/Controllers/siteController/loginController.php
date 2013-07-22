<?php


class loginController extends Usuario{
   
    public function valida_usuario($email,$password){
        $sql = "select * 
               from usuario_detalle
               where email = '".$email."'";
        
       $rs= $this->consulta_sql($sql);
       $rows =$rs->GetArray();
       
       if(count($rows)==1){
           $ps1=  trim($rows['0']['password']);
           $ps2=  trim(md5($password));
           if($ps1==$ps2){
               $this->inicia_sesion($rows['0']);
           }else{
               echo "password no encontrado";
           }
       }else{
           echo "Email no encontrado";
       }
       
       #echo "Numero de ROWS: ".count($rows);
       
        #echo "<pre>";
       # print_r($rs->GetArray());
       # echo "</pre>";
    }
    
    public function inicia_sesion($rows){
        $_SESSION['email']=$rows['email'];
        $_SESSION['nombre']=$rows['nombre'];
        $_SESSION['roles']=array('admin','maestro');
        $_SESSION['id_usuario']='1';
        header("location: inicio.php");
    }
    
}

?>

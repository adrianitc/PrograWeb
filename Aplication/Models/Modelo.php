<?php

class Modelo{
    private  $db;
    
    function Modelo(){
        $this->db=  ADONewConnection('mysql');
        $this->db-> debug=true;
        $this->db->Connect('localhost','root','','itc');
    }
    public function consulta_datos(){
        $rs=$this->db->Execute('SELECT * from '.$this->nombre_tabla);
        $this->get_error($rs,'Error en consulta datos');
        return $rs;
    }
    public function inserta(){
        $rs = array();
        $rs['apellido_paterno']='x';
        $rs['apellido_materno']='y';
        $rs['nombre']='z';
        $rs['sexo']='M';
        $rs['edad']='21';
        $rs['email']='juannn@nnnzn.mmm';
        $rs['nctr_rfc']='09090909';
        $sql_insert=  $this->db->GetInsertSQL($this->nombre_tabla,$rs);
        $this->get_error($this->db->Execute($sql_insert),'Error en modelo.inserta');
    }
    public function get_error($result,$tipo_error){
        if($result==false){
            die('Redireccionar a la pagina de error'.$tipo_error);
        }
    }
    public function show_grid($num='10'){
        $sql="SELECT id_usuario as ID,
                     apellido_paterno as ApellidoPaterno,
                     apellido_materno as ApellidoMaterno,
                     nombre as Nombre,
                     sexo as Sexo,
                     edad as Edad,
                     email as Email,
                     nctr_rfc as Control 
                     FROM ".$this->nombre_tabla."";
        $grid=new ADODB_Pager($this->db,$sql);
        $grid->Render($rows_per_page=$num);
    }
    public function actualiza($id){
        if(is_integer($id)){
        $sql = "SELECT * FROM ".$this->nombre_tabla."
                WHERE id_usuario = ".$id;
        
        $record = $this->db->Execute($sql);
        $rs = array();
        $rs['apellido_paterno']='paco';
        $rs['apellido_materno']='y';
        $rs['nombre']='z';
        $rs['sexo']='M';
        $rs['edad']='21';
        $rs['email']='aco@nnnzn.mmm';
        $rs['nctr_rfc']='09090909';
        
        $sql_update = $this->db->GetUpdateSQL($record,$rs);
        $this->get_error($this->db->Execute($sql_update),"Error al Actualizar");
        
         }else{
             die('OJO');
         }
    }
   //Tarea hacer una funcion que elimine por id 
    public function elimina(){
        $sql = "DELETE FROM ".$this->nombre_tabla;
        $this->get_error($this->db->Execute($sql),"Error al Eliminar");
    }
}
?>

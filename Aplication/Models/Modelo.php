<?php
include ('Valida.php');
class Modelo extends Valida{
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
    public function inserta($rs){

        $sql_insert=  $this->db->GetInsertSQL($this->nombre_tabla,$rs);
        $this->get_error($this->db->Execute($sql_insert),'Error en Modelo.inserta');
    }
    public function get_error($result,$tipo_error){
        if($result==false){
            die('Redireccionar a la pagina de error '.$tipo_error);
            return false;
        }else{
            return true;
        }
    }
    public function show_grid($num='10'){
        $sql="SELECT id_usuario as ID,
                     apellido_paterno as Apellido_Paterno,
                     apellido_materno as Apellido_Materno,
                     nombre as Nombre,
                     sexo as Sexo,
                     edad as Edad,
                     email as Email,
                     nctr_rfc as No_Control 
                     FROM ".$this->nombre_tabla."";
        $grid=new ADODB_Pager($this->db,$sql);
        $grid->Render($rows_per_page=$num);
    }
    public function show_gridE($num='10'){
        $sql="SELECT id_evento as ID,
                     nombre_evento as Nombre_Evento,
                     contacto as Contacto,
                     cuando as Cuando,
                     donde as Donde,
                     informacion as Informacion,
                     fecha_inicio as Fecha_Inicio,
                     fecha_fin as Fecha_Fin 
                     FROM ".$this->nombre_tabla."";
        $grid=new ADODB_Pager($this->db,$sql);
        $grid->Render($rows_per_page=$num);
    }
    public function show_gridA($num='10'){
        $sql="SELECT id_actividad as ID,
                     id_evento as ID_Evento,
                     nombre_actividad as Nombre_Actividad,
                     lugares as Lugares,
                     precio as Precio,
                     descripcion as Descripcion,
                     informacion as Informacion,
                     id_usuario as ID_Usuario 
                     FROM ".$this->nombre_tabla."";
        $grid=new ADODB_Pager($this->db,$sql);
        $grid->Render($rows_per_page=$num);
    }
    public function show_gridTU($num='10'){
        $sql="SELECT id_tipo_usuario as ID,
                     tipo as Tipo
                     FROM ".$this->nombre_tabla."";
        $grid=new ADODB_Pager($this->db,$sql);
        $grid->Render($rows_per_page=$num);
    }
    public function show_gridETU($num='10'){
        $sql="SELECT id_evento_tipo_usuario as ID,
                     id_evento as ID_Evento,
                     id_tipo_usuario as ID_Tipo_Usuario
                     FROM ".$this->nombre_tabla."";
        $grid=new ADODB_Pager($this->db,$sql);
        $grid->Render($rows_per_page=$num);
    }
    public function show_gridATU($num='10'){
        $sql="SELECT id_asistente_tipo_usuario as ID,
                     id_usuario as ID_Usuario,
                     id_tipo_usuario as ID_Tipo_Usuario
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
    public function elimina($where = 'null'){
       
        if($id == 'null')
            $sql = "DELETE FROM ".$this->nombre_tabla;
        else
            $sql = "DELETE FROM ".$this->nombre_tabla."
                    WHERE ".$where;
        
        $this->get_error($this->db->Execute($sql), "Error al eliminar");
        
    }
}
?>

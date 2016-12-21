<?php
class usuarios_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    
    public function getLogin($correo,$pass)
    {
        $query=$this->db
                ->select("id,nombre,correo,telefono,pass")
                ->from("usuarios")
                ->where(array('correo'=>$correo,'pass'=>$pass))
                ->get();
        //echo $this->db->last_query();exit;        
        return $query->row();            
    }
    
}


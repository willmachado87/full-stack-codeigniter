<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

    //Lista todos as cervejas da tabela 
    public function getUsuario($email=null){        
        $this->db->where('email', $email);    
        //$this->db->where('senha', $senha);    
        $this->db->limit(1);        
        $query = $this->db->get("usuarios");       
        return $query->row();        
    }
}    
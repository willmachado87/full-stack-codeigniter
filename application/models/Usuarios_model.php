<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

    
    public function getAllUsuarios(){                                 
        $query = $this->db->get("usuarios");        
        return $query->result();
    }

    
    
    public function addUsuario($dados=NULL){
        if ($dados != NULL) {
            $this->db->insert('usuarios', $dados);		
        }
    }
    
    
	public function editaUsuario($dados=NULL){
        print_r($dados);           
        if ($dados != NULL ){            
            $this->db->update('usuarios', $dados, array('id'=>$dados['id']));      
        }else{
            echo('erro!! ao editar no DB');
        }
    }   
      
     
    public function getProdutoByID($id=NULL) {
        if ($id != NULL){            
            $this->db->where('id', $id);    
            $this->db->limit(1);
            $query = $this->db->get("usuarios");
            return $query->row();   
        }else{
            echo('erro!!!!');
        }
    } 

    
    public function apagarUsuario($id=NULL){
        if ($id != NULL){
            $this->db->delete('usuarios', array('id'=>$id));            
        }
    }  

}

<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cervejas_model extends CI_Model {

    //Lista todos as cervejas da tabela 
    public function getAllCervejas(){                                 
        $query = $this->db->get("cervejas");        
        return $query->result();
    }

    
    //Adiciona uma nova cerveja na tabela 
    public function addCerveja($dados=NULL){
        if ($dados != NULL) {
            $this->db->insert('cervejas', $dados);		
        }
    }
    
    //edita dados no DB
	public function editarCerveja($dados=NULL){           
        if ($dados != NULL ){            
            $this->db->update('cervejas', $dados, array('id'=>$dados['id']));      
        }else{
            echo('erro!! ao editar no DB');
        }
    }   
      
    //localiza cerveja pelo ID    
    public function getProdutoByID($id=NULL) {
        if ($id != NULL){            
            $this->db->where('id', $id);    
            $this->db->limit(1);
            $query = $this->db->get("cervejas");
            return $query->row();   
        }else{
            echo('erro!!!!');
        }
    } 

    //Apaga uma cerveja na tabela 
    public function apagarCerveja($id=NULL){
        if ($id != NULL){
            $this->db->delete('cervejas', array('id'=>$id));            
        }
    }  

}

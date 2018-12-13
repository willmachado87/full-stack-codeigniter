<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pedidos_model extends CI_Model {

    
    public function getAllPedidos(){
        $this->db->select('pedidos.id,pedidos.id_usuario,usuarios.nome,usuarios.email,pedidos.cep,
        pedidos.endereco,pedidos.numero,pedidos.cidade,pedidos.uf,pedidos.bairro,pedidos.status_pedido');
        $this->db->from('pedidos');
        $this->db->join('usuarios', 'pedidos.id_usuario = usuarios.id');        
        $query = $this->db->get();
        //print_r($query->result());
        return $query->result();         
    }    
    
    public function addPedido($dados=NULL){
        if ($dados != NULL) {
            $this->db->insert('pedidos', $dados);		
        }
    }
    
    
	public function editaPedido($dados=NULL){
        print_r($dados);           
        if ($dados != NULL ){            
            $this->db->update('pedidos', $dados, array('id'=>$dados['id']));      
        }else{
            echo('erro!! ao editar no DB');
        }
    }   
      
     
    public function getProdutoByID($id=NULL) {
        if ($id != NULL){            
            $this->db->select('pedidos.id,pedidos.id_usuario,usuarios.nome AS nome_usuario,usuarios.email,
            cervejas.id AS id_cerveja,cervejas.nome AS nome_cerveja,pedidos.cep,pedidos.endereco,
            pedidos.numero,pedidos.cidade,pedidos.uf,pedidos.bairro,pedidos.status_pedido');
            $this->db->from('pedidos');            
            $this->db->join('usuarios', 'pedidos.id_usuario = usuarios.id');
            $this->db->join('cervejas', 'pedidos.id_cerveja = cervejas.id');
            $this->db->where('pedidos.id' , $id);                   
            $query = $this->db->get();
            //print_r($query->result());
            //return $query->result();    
            return $query->row();    
        }else{
            echo('erro!!!!');
        }
    } 

    
    public function apagarPedido($id=NULL){
        if ($id != NULL){
            $this->db->delete('pedidos', array('id'=>$id));            
        }
    }  

}

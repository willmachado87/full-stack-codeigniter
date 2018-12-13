<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidos extends CI_Controller {
	
	function __construct() {
		parent::__construct();

		$this->load->view('menu');
		$this->load->model('pedidos_model');		           
    }
	
	//Página de listar 
	public function index()	{	
		$data['pedidos'] = $this->pedidos_model->getAllPedidos();			
		$this->load->view('listarPedidos', $data);
		//$this->load->view('menu');		
	}
	
	//redireciona para Página de adicionar 
	public function addPedidosPage(){	
		$this->load->view('addPedidos');
	}

	//redireciona para Página editar 
	public function editarPage($id=NULL){		
		if($id == NULL) {
			redirect('/');
		}
		$query = $this->pedidos_model->getProdutoByID($id);			
		$dados['pedido'] = $query;
		//print_r($dados);		
		$this->load->view('editarPedido', $dados);		
	}

	//Função salvar no DB
	public function salvar(){		
		$dados['id_usuario'] = $this->input->post('id_usuario');
		$dados['id_cerveja'] = $this->input->post('id_cerveja');		
		$dados['status_pedido'] = $this->input->post('status_pedido');		
		$dados['cep'] = $this->input->post('cep');		
		$dados['endereco'] = $this->input->post('endereco');
		$dados['numero'] = $this->input->post('numero');
		$dados['cidade'] = $this->input->post('cidade');
		$dados['uf'] = $this->input->post('uf');
		$dados['bairro'] = $this->input->post('bairro');
		//print_r($dados);	
		$this->pedidos_model->addPedido($dados);	
		redirect("/pedidos");		
	}		

	// Função atualizar dados no DB
	public function editar() {								
		$dados['id'] = $this->input->post('id');
		$dados['id_usuario'] = $this->input->post('id_usuario');
		$dados['id_cerveja'] = $this->input->post('id_cerveja');		
		$dados['status_pedido'] = $this->input->post('status_pedido');		
		$dados['cep'] = $this->input->post('cep');		
		$dados['endereco'] = $this->input->post('endereco');
		$dados['numero'] = $this->input->post('numero');
		$dados['cidade'] = $this->input->post('cidade');
		$dados['uf'] = $this->input->post('uf');
		$dados['bairro'] = $this->input->post('bairro');
		//print_r($dados);	
		$this->pedidos_model->editaPedido($dados);	
		redirect("/pedidos");		
	}

	//Função apaga dado do DB
	public function apagar($id=NULL) {		
		if($id != NULL) {
			$this->pedidos_model->apagarPedido($id);
			redirect('/pedidos');
		}				
	}
	
}

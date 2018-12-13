<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cervejas extends CI_Controller {
	
	function __construct() {
		parent::__construct();

		$this->load->view('menu');
		$this->load->model('cervejas_model');
		//            
    }
	
	//Página de listar produtos
	public function index()	{	
		$data['cervejas'] = $this->cervejas_model->getAllCervejas();			
		$this->load->view('listarCervejas', $data);
		//$this->load->view('menu');		
	}
	
	//redireciona para Página de adicionar produto
	public function addPage(){	
		$this->load->view('addCervejas');
	}

	//redireciona para Página editar produto
	public function editarPage($id=NULL){		
		if($id == NULL) {
			redirect('/');
		}
		$query = $this->cervejas_model->getProdutoByID($id);			
		$dados['cerveja'] = $query;		
		$this->load->view('editarCerveja', $dados);		
	}

	//Função salvar no DB
	public function salvar(){		
		if ($this->input->post('nome') == NULL || $this->input->post('tipo') == NULL || 
			$this->input->post('desc') == NULL || $this->input->post('nome') == '' || 
			$this->input->post('tipo') == '' || $this->input->post('desc') == '') {
			echo 'Favor preencher todos os campos';
			echo '<a href="/td/cervejas/addPage" title="voltar">Clique aqui para Voltar</a>';
			print_r($this->input->post('nome')." ".$this->input->post('tipo')." ".$this->input->post('desc'));
		}else {		
			$dados['nome'] = $this->input->post('nome');
			$dados['tipo'] = $this->input->post('tipo');
			$dados['descricao'] = $this->input->post('desc');		
			$dados['url'] = $this->input->post('url');		
			$this->cervejas_model->addCerveja($dados);	
			redirect("/");	
		}
	}		

	// Função atualizar dados no DB
	public function editar() {		
		if ($this->input->post('nome') == NULL || $this->input->post('tipo') == NULL || 
			$this->input->post('desc') == NULL || $this->input->post('nome') == '' || 
			$this->input->post('tipo') == '' || $this->input->post('desc') == '') {
			echo 'Favor preencher todos os campos';
			echo '<a href="/td/cervejas/addPage" title="voltar">Clique aqui para Voltar</a>';
			print_r($this->input->post('nome')." ".$this->input->post('tipo')." ".$this->input->post('desc'));
		}else {						
			$dados['id'] = $this->input->post('id');
			$dados['nome'] = $this->input->post('nome');
			$dados['tipo'] = $this->input->post('tipo');
			$dados['descricao'] = $this->input->post('desc');
			$dados['url'] = $this->input->post('url'); 		
			$this->cervejas_model->editarCerveja($dados);	
			redirect("/");	
		}
	}

	//Função apaga dado do DB
	public function apagar($id=NULL) {		
		if($id != NULL) {
			$this->cervejas_model->apagarCerveja($id);
			redirect('/');
		}				
	}
	
}

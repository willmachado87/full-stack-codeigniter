<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
	
	function __construct() {
		parent::__construct();

		$this->load->view('menu');
		$this->load->model('usuarios_model');		           
    }
	
	//Página de listar produtos
	public function index()	{	
		$data['usuarios'] = $this->usuarios_model->getAllUsuarios();			
		$this->load->view('listarUsuarios', $data);
		//$this->load->view('menu');		
	}
	
	//redireciona para Página de adicionar produto
	public function addUsuarioPage(){	
		$this->load->view('addUsuarios');
	}

	//redireciona para Página editar produto
	public function editarPage($id=NULL){		
		if($id == NULL) {
			redirect('/');
		}
		$query = $this->usuarios_model->getProdutoByID($id);			
		$dados['usuario'] = $query;		
		$this->load->view('editarUsuario', $dados);		
	}

	//Função salvar no DB
	public function salvar(){		
		if ($this->input->post('nome') == NULL || $this->input->post('email') == NULL || 
			$this->input->post('senha') == NULL || $this->input->post('nome') == '' || 
			$this->input->post('email') == '' || $this->input->post('senha') == '') {
			echo 'Favor preencher todos os campos';
			echo '<a href="/td/usuarios/addUsuarioPage" title="voltar">Clique aqui para Voltar</a>';
			print_r($this->input->post('nome')." ".$this->input->post('tipo')." ".$this->input->post('desc'));
		}else {		
			$dados['nome'] = $this->input->post('nome');
			$dados['email'] = $this->input->post('email');
			$dados['senha'] = $this->input->post('senha');		
			$dados['admin'] = $this->input->post('admin');		
			$this->usuarios_model->addUsuario($dados);	
			redirect("/usuarios");	
		}
	}		

	// Função atualizar dados no DB
	public function editar() {
			
		if ($this->input->post('nome') == NULL || $this->input->post('email') == NULL || 
		$this->input->post('senha') == NULL || $this->input->post('nome') == '' || 
		$this->input->post('email') == '' || $this->input->post('senha') == '') {
			echo 'Favor preencher todos os campos';
			echo '<a href="/td/usuarios/addUsuarioPage" title="voltar">Clique aqui para Voltar</a>';			
		}else {						
			$dados['id'] = $this->input->post('id');
			$dados['nome'] = $this->input->post('nome');
			$dados['email'] = $this->input->post('email');
			$dados['senha'] = $this->input->post('senha');		
			$dados['admin'] = $this->input->post('admin');
			//print_r($dados);
			
			$this->usuarios_model->editaUsuario($dados);	
			redirect("/usuarios");	 
		}
	}

	//Função apaga dado do DB
	public function apagar($id=NULL) {		
		if($id != NULL) {
			$this->usuarios_model->apagarUsuario($id);
			redirect('/usuarios');
		}				
	}
	
}

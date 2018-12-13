<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		//$this->load->view('menu');
		$this->load->model('login_model','usuarios');		            
    }
	
	//Página de listar produtos
	public function index()	{	
		//$data['cervejas'] = $this->cervejas_model->getAllCervejas();			
		//$this->load->view('listarCervejas', $data);
		$this->load->view('login');		
	}
	
	public function autenticar(){
		$email = $this->input->post('email');
		$senha = $this->input->post('senha');
		$data = $this->usuarios->getUsuario($email, $senha);
		
		if($data != null && $data->senha == $senha ){		
			$this->session->set_userdata("usuario_logado", $data);
			$this->session->set_flashdata('sucess', 'Logado com sucesso');			
			redirect("/");
		}else{
			echo("Usuario não cadastrado ");
			echo '<a href="/td/login" title="voltar">Clique aqui para Voltar</a>';
			$this->session->set_flashdata('Danger', 'Usuario ou senha invalidos!');
			//redirect("login");
		}		
	}

	public function deslogar(){
		$this->session->unset_userdata("usuario_logado");		
		redirect('login');		
	}	


}    
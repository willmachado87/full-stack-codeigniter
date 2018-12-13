<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('cervejas_model');            
    }
	
	//Página de listar produtos
	public function index()	{	
		$data['cervejas'] = $this->cervejas_model->getAllCervejas();		
		$this->load->view('menu');		
    }
}    
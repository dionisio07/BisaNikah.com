<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('adminModel');
	}

	public function index()
	{
		$data['paket'] = $this->adminModel->getAllPaket();
		$data['new'] = $this->adminModel->getNewPaket();
		$this->load->view('header');
		$this->load->view('home',$data);
		$this->load->view('footer');
	}
	public function register(){
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');		
	}
	public function login(){
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');	
	}
}

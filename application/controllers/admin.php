<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('adminModel');
	}

    public function showPaket(){

    }

    public function createPaket(){
            $data['lokasi'] = $this->adminModel->getLokasi();
            $this->load->view('header');
            $this->load->view('createPaket',$data);
            $this->load->view('footer');	
            
          
    
    }
    public function addPaket(){
        //$this->form_validation->set_rules("");
    }
    public function editPaket($idPaket){

    }
    public function deletePaket($idPaket){
        $this->paketModel->deletePaket($idPaket);
    }    
    public function setRole($idUser,$role){
        $this->userModel->setRole($idUser,$role);
    }
}

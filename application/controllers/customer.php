<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customer extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('userModel');
	}
    public function register(){
         //validation form
            $this->form_validation->set_rules('username','Username','required|trim|is_unique[user.username]');
            $this->form_validation->set_rules('fname','Fname','required|trim|is_unique[user.email]');
            $this->form_validation->set_rules('lname','Lname','required|trim');
		    $this->form_validation->set_rules('email','Email','required|trim');
		    $this->form_validation->set_rules('password','Password','required|trim');
            $this->form_validation->set_rules('repassword','RePassword','required|trim|matches[password]');
            $this->form_validation->set_rules('jenisKelamin','jenisKelamin','required');

            //validation check
            if($this->form_validation->run()== false){
               //flashdata fail
                $this->session->set_flashdata('message','<div class ="alert alert-danger role = alert">Register Gagal  </div>');
                $this->load->view('header');
		        $this->load->view('register');
		        $this->load->view('footer');	
            }
            else {
            //insert data to array
               $data = [
                    'username' =>htmlspecialchars($this->input->post('username',true)),
                    'idRole' =>1,
                    'firstName' =>htmlspecialchars($this->input->post('fname',true)),
                    'lastName'=>htmlspecialchars($this->input->post('lname',true)),   
                    'password' =>password_hash($this->input->post('password'),PASSWORD_DEFAULT),
                    'email'=>$this->input->post('email'),
                    'gender'=>$this->input->post('jenisKelamin')
                ];
                $this->userModel->register($data);
                $this->session->set_flashdata('message','<div class ="alert alert-success role = alert">Register Berhasil  </div>');
                $this->load->view('header');
		        $this->load->view('register');
		        $this->load->view('footer');	
            
            
            }
    }
    public function login(){
      $this->form_validation->set_rules('username','Username','required|trim');
      $this->form_validation->set_rules('password','Password','required|trim');
      if($this->form_validation->run()== false){
          $this->session->set_flashdata('message','<div class ="alert alert-danger role = alert">Username atau Password Kosong</div>');
          $this->load->view('header');
		  $this->load->view('login');
		  $this->load->view('footer');	
      }
      else{
          $query = $this->userModel->getUser($this->input->post('username'));
          if(($query)&&(password_verify($this->input->post('password'), $query["password" ]))){
                $this->session->set_userdata($query);
                $data = $this->userModel->getUser($this->session->userdata('username'));
                redirect(base_url());
          }else{
            $this->session->set_flashdata('message','<div class ="alert alert-danger role = alert">Username atau Password Salah</div>');
            $this->load->view('header');
            $this->load->view('login');
            $this->load->view('footer');	
          };
      }

    }
    public function contact(){
        $this->load->view('header');
        $this->load->view('contact');
        $this->load->view('footer');	
    }
    public function showPaket(){

    }
    public function createPesanan(){

    }
    public function cekPesanan(){

    }
    public function editPesanan(){

    }
    public function deletePesanan(){

    }
    public function createPembayaran(){

    }
    public function editPembayaran(){

    }
    public function deletePembayaran(){

    }
    public function searchPaket(){

    }
    public function konfirmasiPesanan(){

    }
    public function logout(){
        $this->session->unset_userdata('username');
        redirect(base_url());
    }

}

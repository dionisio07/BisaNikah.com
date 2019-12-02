<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customer extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
        $this->load->model('userModel');
		$this->load->model('adminModel');
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
    public function detailPaket($id){
        $data['paket'] = $this->adminModel->getPaket($id);
        $data['lokasi'] = $this->adminModel->getLocationById($data['paket']['idLokasi']);
        $this->load->view('header');
        $this->load->view('product-details',$data);
        $this->load->view('footer');	
    }

    public function addPesanan($id){
        $this->form_validation->set_rules('tgl','tgl','required');
        if(($this->form_validation->run()== false)){
            $data['paket'] = $this->adminModel->getPaket($id);
            $data['lokasi'] = $this->adminModel->getLocationById($data['paket']['idLokasi']);
            $this->load->view('header');
            $this->load->view('product-details',$data);
            $this->load->view('footer');	
        }else if ($this->session->userdata('username')==null){
            $this->session->set_flashdata('message','<div class ="alert alert-danger role = alert">Anda Harus Login Terlebih Dahulu</div>');
            $this->load->view('header');
            $this->load->view('login');
            $this->load->view('footer');	
        }else{
            $data = [
                'username' => $this->session->userdata('username'),
                'idPaket' => $id,
                'tglPemesanan' => date('Y-m-d'),
                'tglAcara' => $this->input->post('tgl')
            ];
            $this->userModel->pesanan($data);
            $this->cart();
        }
    }
    public function cart(){
        $data['pesanan'] = $this->userModel->getAllPesanan($this->session->userdata('username'));
        $this->load->view('header');
        $this->load->view('cart',$data);
        $this->load->view('footer');
    }
    public function deletePesanan($id){
       $this->userModel->deletePesanan($id);
       $this->cart();
    }
    public function infoPembayaran($idPesanan){
        $data['id'] = $idPesanan;
        $this->load->view('header');
        $this->load->view('infoPembayaran',$data);
        $this->load->view('footer');
        
    }
    public function createPembayaran($idPesanan){
        $data = [
            'idPesanan' => $idPesanan,
            'caraPembayaran' => "ATM",
            'tglPembayaran'=> date('Y-m-d')
        ];
        $this->userModel->addPembayaran($data);
        $get['data'] = $this->userModel->getPembayaran($idPesanan);
        $this->load->view('header');
        $this->load->view('pembayaran',$get);
        $this->load->view('footer');
    }
    public function logout(){
        $this->session->unset_userdata('username');
        redirect(base_url());
    }

}

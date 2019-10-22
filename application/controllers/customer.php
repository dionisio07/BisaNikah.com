<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customer extends CI_Controller {

    public function register(){
         //validation form
            $this->form_validation->set_rules('username','Username','required|trim');
            $this->form_validation->set_rules('fname','Fname','required|trim');
            $this->form_validation->set_rules('lname','Lname','required|trim');
		        $this->form_validation->set_rules('email','Email','required|trim');
		        $this->form_validation->set_rules('password','Password','required|trim');
		        $this->form_validation->set_rules('repassword','RePassword','required|trim|matches[password]');

            //validation check
            if($this->form_validation->run()== false){
               //flashdata fail
                $this->session->set_flashdata('message','<div class ="alert alert-danger role = alert">Gagal Melakuan registrasi  </div>');
                $this->load->view('header');
		            $this->load->view('register');
		            $this->load->view('footer');	
            }
            else {
            //insert data to array
               // $data = [
               //     'nama' =>$this->input->post('nama'),
               //     'wilayah' =>$this->input->post('wilayah'),
               //     'instansi'=>$this->input->post('instansi'),
               //     'email'=>$this->input->post('email'),
               //     'password' =>password_hash( $this->input->post('password'),PASSWORD_DEFAULT),
               //     'gambar' =>'default.png'
              //  ];
                // memanggil method registCst dari model
              //  $this->M_Customer->regisCst($data);
                //flashdata sukses
                echo "sukses";
              
            }
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


}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customer extends CI_Controller {

    public function register(){
         //validation form
            $this->form_validation->set_rules('username','username','required|trim');
            $this->form_validation->set_rules('fname','fname','required|trim');
            $this->form_validation->set_rules('lname','lname','required|trim');
		    $this->form_validation->set_rules('email','Email','required|trim|');
		    $this->form_validation->set_rules('password','Password','required|trim|');
		    //$this->form_validation->set_rules('password-re','Password-re','required|trim|matches[password]');

            //validation check
            if($this->form_validation->run()== false){
               //flashdata fail
                $this->session->set_flashdata('message','<div class ="alert alert-danger role = alert">Register Gagal  </div>');
                redirect(base_url());
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
                $this->session->set_flashdata('message','<div class ="alert alert-success role = alert">Register Berhasil </div>'); 
                redirect(base_url()); 
              
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

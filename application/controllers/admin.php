<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('adminModel');
	}

    public function createPaket(){
            $data['lokasi'] = $this->adminModel->getLokasi();
            $this->load->view('header');
            $this->load->view('createPaket',$data);
            $this->load->view('footer');	
            
          
    
    }
    public function addPaket(){
        $this->form_validation->set_rules('namaPaket','namaPaket','required|trim');
        $this->form_validation->set_rules('harga','harga','required|trim');
        $this->form_validation->set_rules('lokasi','lokasi','required|trim');
        $this->form_validation->set_rules('deskripsi','deskripsi','required|trim');
        //$this->form_validation->set_rules('pic','pic','required');
        if($this->form_validation->run()== false){
            //flashdata fail
             $this->session->set_flashdata('message','<div class ="alert alert-danger role = alert">Create Paket Gagal  </div>');
             $data['lokasi'] = $this->adminModel->getLokasi();
             $this->load->view('header');
             $this->load->view('createPaket',$data);
             $this->load->view('footer');	
         }
         else {
            $foto = $_FILES['foto'];
            if($foto=''){
                $foto = 'default.png';
            }else{
                $config['upload_path'] = './upload/';
                $config['allowed_types']= 'jpg|png|jpeg';
                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('foto')){
                    echo $this->upload->display_errors();
                }else{
                    $foto = $this->upload->data('file_name');
                }
            }
            $data =[
                'namaPaket' =>$this->input->post('namaPaket'),
                'harga' =>$this->input->post('harga'),
                'deskripsi'=>$this->input->post('deskripsi'),
                'gedung' =>$this->input->post('gedung'),
                'decoration'=>$this->input->post('decoration'),
                'catering'=>$this->input->post('catering'),
                'cake'=>$this->input->post('cake'),
                'band'=>$this->input->post('band'),
                'wo'=>$this->input->post('wo'),
                'mc'=>$this->input->post('mc'),
                'dokumentasi'=>$this->input->post('dokumentasi'),
                'makeup'=>$this->input->post('makeup'),
                'idLokasi'=>$this->input->post('lokasi'),
                'gambar'=>$foto
            ];
            $this->adminModel->addPaket($data);
            $this->session->set_flashdata('message','<div class ="alert alert-success role = alert">Create Paket Berhasil  </div>');
            $data['lokasi'] = $this->adminModel->getLokasi();
            $this->load->view('header');
            $this->load->view('createPaket',$data);
            $this->load->view('footer');	
         }
    }
    public function showPaket(){
        $data['paket']= $this->adminModel->getAllPaket();
        $this->load->view('header');
        $this->load->view('listPaket',$data);
        $this->load->view('footer');
    }
    public function detailPaket($id){
        $data['paket'] = $this->adminModel->getPaket($id);
        $data['lokasi'] = $this->adminModel->getLocationById($data['paket']['idLokasi']);
        var_dump($data);
        $this->load->view('header');
        $this->load->view('product-details',$data);
        $this->load->view('footer');
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

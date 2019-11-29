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
            if($foto['name']==''){
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
        $this->load->view('header');
        $this->load->view('product-details',$data);
        $this->load->view('footer');
    }
    public function editPaketView($id){
        $data['lokasi'] = $this->adminModel->getLokasi();
        $data['paket']  = $this->adminModel->getPaket($id);
        $this->load->view('header');
        $this->load->view('editPaket',$data);
        $this->load->view('footer');
    }
    public function editPaket($id){

        $this->form_validation->set_rules('namaPaket','namaPaket','required|trim');
        $this->form_validation->set_rules('harga','harga','required|trim');
        $this->form_validation->set_rules('lokasi','lokasi','required|trim');
        $this->form_validation->set_rules('deskripsi','deskripsi','required|trim');
        //$this->form_validation->set_rules('pic','pic','required');
        if($this->form_validation->run()== false){
            //flashdata fail
             $this->session->set_flashdata('message','<div class ="alert alert-danger role = alert">Create Paket Gagal  </div>');
             $data['lokasi'] = $this->adminModel->getLokasi();
             $data['paket']  = $this->adminModel->getPaket($id);
             $this->load->view('header');
             $this->load->view('editPaket',$data);
             $this->load->view('footer');
         }
         else {
            $foto = $_FILES['foto'];
            if($foto==''){
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
            
            if($foto['name']==''){
                $dataa = $this->adminModel->getPaket($id);
                $data =[
                   
                    'idPaket'=>$id,
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
                    'gambar'=>$dataa['gambar']
                ];
            }else{
                $data =[
                    'idPaket'=>$id,
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
            }   
            $this->adminModel->editPaket($data);            
            $this->session->set_flashdata('message','<div class ="alert alert-success role = alert">Berhasil Mengedit Paket  </div>');
            $data['lokasi'] = $this->adminModel->getLokasi();
            $data['paket']  = $this->adminModel->getPaket($id);
            $this->load->view('header');
            $this->load->view('editPaket',$data);
            $this->load->view('footer');

         }
    }
    public function deletePaket($idPaket){
        $this->adminModel->deletePaket($idPaket);
        $data['paket']= $this->adminModel->getAllPaket();
        $this->load->view('header');
        $this->load->view('listPaket',$data);
        $this->load->view('footer');
    }    
    public function setRole($idUser,$role){
        $this->userModel->setRole($idUser,$role);
    }
}

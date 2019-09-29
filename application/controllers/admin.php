<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('adminIndex');
    }
    public function showPaket(){
        data['dataPaket'] = $this->paketModel->getAllPaket()
        $this->load->view('adminIndex',$data)

    }

    public function tambahPaket(){
        {
            if($this->session->userdata('username')){
                $this->form_validation->set_rules('namagedung', 'namaGedung', 'required');
                $this->form_validation->set_rules('dekorasi', 'dekorasi', 'required');
                $this->form_validation->set_rules('wo', 'wo', 'required');
                $this->form_validation->set_rules('souvenir', 'souvenir', 'required');
                $this->form_validation->set_rules('harga', 'harga', 'required');
                if($this->form_validation->run() === TRUE){
                    $data['namaBarang'] = $this->input->post('namaBarang');
                    $data['dekorasi'] = $this->input->post('dekorasi');
                    $data['wo'] = $this->input->post('wo');
                    $data['souvenir'] = $this->input->post('souvenir');
                    $data['harga'] = $this->input->post('harga');
                    $config['upload_path']          = './uploads/';
                    $config['allowed_types']        = 'gif|jpg|png|jpeg';
                    $config['max_size']             = 1000;
                    $config['max_width']            = 1024;
                    $config['max_height']           = 768;
    
                    $this->load->library('upload', $config);        
    
                    if ( ! $this->upload->do_upload('gambar'))
                    {
                        echo $this->upload->display_errors();
                    }
                    else
                    {
                        $data['gambar'] = $this->upload->data()['file_name'];
                    }
    
                    $id = $this->Web_model->insertJualBarang($data,$this->session->userdata('username'));
    
                    if($id){
                        $this->session->set_flashdata("message", '<div class="alert alert-success">Data berhasil disimpan</div>');
                        redirect('/');
                    }
                    else {
                        $this->session->set_flashdata("message", '<div class="alert alert-warning">Data gagal disimpan</div>');
                        redirect('/');
                    }
                }
    
                $this->load->view('tambahPaket');	
            }
            else{
                redirect('admin/tambahPaket');
            }
            
        }
    
    }
    public function editPaket($idPaket){
        if($this->session->userdata('username')){
            $this->form_validation->set_rules('namagedung', 'namaGedung', 'required');
            $this->form_validation->set_rules('dekorasi', 'dekorasi', 'required');
            $this->form_validation->set_rules('wo', 'wo', 'required');
            $this->form_validation->set_rules('souvenir', 'souvenir', 'required');
            $this->form_validation->set_rules('harga', 'harga', 'required');
            if($this->form_validation->run() === TRUE){
                $data['namaBarang'] = $this->input->post('namaBarang');
                $data['dekorasi'] = $this->input->post('dekorasi');
                $data['wo'] = $this->input->post('wo');
                $data['souvenir'] = $this->input->post('souvenir');
                $data['harga'] = $this->input->post('harga');
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);        

                if ( ! $this->upload->do_upload('gambar'))
                {
                    echo $this->upload->display_errors();
                }
                else
                {
                    $data['gambar'] = $this->upload->data()['file_name'];
                }

                $id = $this->paketModel->editPaket($idPaket);

                if($id){
                    $this->session->set_flashdata("message", '<div class="alert alert-success">Data berhasil disimpan</div>');
                    redirect('/');
                }
                else {
                    $this->session->set_flashdata("message", '<div class="alert alert-warning">Data gagal disimpan</div>');
                    redirect('/');
                }
            }

            $this->load->view('tambahPaket');	
        }
        else{
            redirect('admin/tambahPaket');
        }
    }
    

}

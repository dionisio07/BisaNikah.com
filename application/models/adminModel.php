<?php 

class adminModel extends CI_Model{


    public function getLokasi(){
        return  $this->db->get('lokasi')->result_array();
    }
    public function addPaket($data){
        $this->db->insert('paket',$data);
    }
    public function getAllPaket(){
        return $this->db->get('paket')->result_array();
    }
    public function getPaket($id){
        return $this->db->get_where('paket',array('idPaket'=>$id))->row_array();
    }
    public function getLocationById($id){
        return $this->db->get_where('lokasi',array('idLokasi'=>$id))->row_array();
    }





}?>
<?php 

/**
 * 
 */
class userModel extends CI_Model{


    public function register($data){
        $this->db->insert('user',$data);
    }
    public function getUser($username){
        return $this->db->get_where('user',['username'=>$username])->row_array();
    }
    public function pesanan($data){
        $this->db->insert('pesanan',$data);
    }
    public function getAllPesanan($username){
        $this->db->select('pesanan.idPesanan,pesanan.username,paket.namaPaket,pesanan.tglPemesanan,pesanan.tglAcara,paket.gambar,paket.harga');
        $this->db->from('pesanan');
        $this->db->join('paket','pesanan.idPaket = paket.idPaket');
        $this->db->where('pesanan.username',$username);
        $this->db->where('pesanan.status',0);
        return $this->db->get()->result_array();
    }
    public function deletePesanan($id){
        $this->db->where('idPesanan', $id);
        $this->db->delete('pesanan');
    }



}?>
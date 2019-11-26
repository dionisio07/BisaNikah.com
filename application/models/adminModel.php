<?php 

class adminModel extends CI_Model{


    public function getLokasi(){
        $query = $this->db->get('lokasi')->result_array();
        return $query;
    }





}?>
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





}?>
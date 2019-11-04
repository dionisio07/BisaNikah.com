<?php 

/**
 * 
 */
class userModel extends CI_Model{


    public class register($data){
        $this->db->insert('user',$data);
    }
    public class getUser($username){
        return $this->db->get_where('user',['username'=>$username])->row_array();
    }





}?>
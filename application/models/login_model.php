<?php

class Login_model extends CI_Model{
   public function login($user, $pass){
        $this->db->select('user, pass');
        $this->db->from('users');
        $this->db->where('user', $user);
        $this->db->where('pass', $pass);
        
        $query = $this->db->get();
        
        if($query->num_rows() == 1){
            return true;
        }else{
            return false;
        }
    }
}
?>

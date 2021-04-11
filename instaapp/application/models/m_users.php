<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_users extends CI_Model {

	
    public function get_data_users(){
        $password = md5($this->input->post('password'));
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('(email="'.$this->input->post("email").'" or username = "'.$this->input->post("username").'") and password="'.$password.'"');
        return $this->db->get();
    }
    public function insert_users(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
		$email = $this->input->post('email');
		$name = $this->input->post('name');
        $datasimpan=array(
            'username'=>$username,
            'password'=>md5($password),
            'email'=>$email,
            'name'=>$name,
        );
        $this->db->insert('users',$datasimpan);
        if($this->db->affected_rows()>0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}
?>
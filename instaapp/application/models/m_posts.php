<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_posts extends CI_Model {

	public function insert_posts(){
        $caption = $this->input->post('caption');
        $name_picture = $this->input->post('name_picture');
		$id_users = $this->session->userdata('id_users');


        $datasimpan=array(
            'caption'=>$caption,
            'name_picture'=>$name_picture,
            'time'=>date("Y-m-d"),
            'id_users'=>$id_users,
        );
        $this->db->insert('posts',$datasimpan);
        if($this->db->affected_rows()>0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}
?>
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_posts extends CI_Model {

	public function insert_posts(){
        $caption = $this->input->post('caption');
        $name_picture = $_FILES['berkas']['name'];
		$id_users = $this->session->userdata('id_users');


        $datasimpan=array(
            'caption'=>$caption,
            'name_picture'=>$name_picture,
            'time'=>date("Y-m-d"),
            'id_users'=>$id_users,
        );
        // var_dump($datasimpan);
        // die();
        $this->db->insert('posts',$datasimpan);
        if($this->db->affected_rows()>0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function data_post(){
        $id_users = $this->session->userdata('id_users');
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->where('id_users="'.$id_users.'"');
        return $this->db->get();
    }
    public function data_post_detail($id_posts){
        // $id_users = $this->session->userdata('id_users');
        $this->db->select('a.*,b.*, if(COUNT(c.id_comments)>0,c.id_comments,null) "Comment",IF((COUNT(d.id_likes)>0),d.id_likes,null) "like" FROM `posts` a JOIN users b on a.id_users=b.id_users JOIN comments c on a.id_posts=c.id_post JOIN likes d on a.id_posts=d.id_posts WHERE  a.id_posts="'.$id_posts.'"',false);
        // $this->db->from('posts');
        // $this->db->where('id_users="'.$id_users.'"');
        return $this->db->get();
    }
    public function data_comments($id){
        $this->db->select('a.*,b.username FROM `comments` a JOIN users b on a.id_users=b.id_users where a.id_post="'.$id.'"',false);
        
        return $this->db->get();
    }
    public function data_likes($id){
        $this->db->select('a.*,b.username FROM `likes` a JOIN users b on a.id_users=b.id_users where a.id_posts="'.$id.'" and a.like_val=1',false);
        
        return $this->db->get();
    }
    public function data_likes_private($id){
        $this->db->select(' * from likes where id_posts="'.$id.'" and id_users="'.$this->session->userdata('id_users').'" ',false);
        
        return $this->db->get();
    }
    public function insert_comment(){
        $data = array(
            'id_users' => $this->session->userdata('id_users'),
            'id_post' => $this->input->post('id_posts'), 
            'content' => $this->input->post('content'), 
            'time' => date("Y-m-d h:i:s"),
        );
        // var_dump($data);
        // die();
        $this->db->insert('comments',$data);
        if($this->db->affected_rows()>0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function insert_likes(){
        $data = array(
            'id_users' => $this->session->userdata('id_users'),
            'id_posts' => $this->input->get('id_posts'), 
            'like_val' => $this->input->get('like_val'), 
            'time' => date("Y-m-d h:i:s"),
        );
        
        if(($this->input->get('like_val')) == '1'){
            $this->db->select('id_likes from likes where id_users="'.$this->session->userdata('id_users').'"',false);
            $query = $this->db->get()->result();
            if (count($query)>0) {
                $this->db->update('likes',$data, array("id_likes" => $query[0]->id_likes));
                if($this->db->affected_rows()>0){
                    return TRUE;
                }else{
                    return FALSE;
                }
            }else{
                $this->db->insert('likes',$data);
                if($this->db->affected_rows()>0){
                    return TRUE;
                }else{
                    return FALSE;
                }
            }
            
        }else{
            $this->db->select('id_likes from likes where id_users="'.$this->session->userdata('id_users').'"',false);
            $query = $this->db->get()->result();
            $this->db->update('likes',$data, array("id_likes" => $query[0]->id_likes));
            if($this->db->affected_rows()>0){
                return TRUE;
            }else{
                return FALSE;
            }
        }
        // var_dump($data);
        // die();
        
    }
    
}
?>
<?php

/**
 * 
 */
class Post extends CI_Controller
{
	
	function __construct()
    {
        parent::__construct();
		$this->load->model('m_posts');
		$this->load->model('m_users');
	}

	public function index(){
		$data = array(
			
			'view' => 'v_post',
		 );
		$this->load->view('main',$data);
	}

	public function posts(){
		$data = array(
			
			'view' => 'v_dopost',
		 );
		$this->load->view('main',$data);
	}

	public function do_posts(){
		$caption = $this->input->post('caption');
		$name_picture = $this->input->post('name_picture');

        
           	if($this->m_posts->insert_posts()==TRUE){
	        $this ->session->set_flashdata('pesan_sukses', 'Sukses Posting');
		        redirect('post','refresh');
		     }else{
		        $this->session->set_flashdata('pesan_gagal', 'Gagal Menyimpan Data Anda');
		        $this->load->view('post/posts','refresh');
	        }


	}

}

?>
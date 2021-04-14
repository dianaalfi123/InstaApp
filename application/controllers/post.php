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
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index(){
		$data = array(
			'data' => $this->m_posts->data_post()->result(),
			'view' => 'v_post',
		 );
		$this->load->view('v_main',$data);
	}

	public function posts(){
		$data = array(
			
			'view' => 'v_dopost',
		 );
		$this->load->view('v_main',$data);
	}

	public function detail_post($id){
		// $id_posts = $this->input->get('id');
		$data = array(
			'data' => $this->m_posts->data_post_detail($id)->result(),
			'data_comments' =>$this->m_posts->data_comments($id)->result(),
			'data_likes' => $this->m_posts->data_likes($id)->result(),
			'data_like_private' => $this->m_posts->data_likes_private($id)->result(),
			'view' => 'v_post_detail',
		 );
		// var_dump($data);
		// die();
		$this->load->view('v_main',$data);
	}
 
	public function do_posts(){
		$caption = $this->input->post('caption');
		$name_picture = $_FILES['berkas']['name'];

        
		// ambil data file
		$namaFile = $_FILES['berkas']['name'];
		$namaSementara = $_FILES['berkas']['tmp_name'];

		// tentukan lokasi file akan dipindahkan
		$dirUpload = "upload/";

		// pindahkan file
		$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

		if ($terupload) {
		    // echo "Upload berhasil!<br/>";
		    // echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
		    if($this->m_posts->insert_posts()==TRUE){
	        $this ->session->set_flashdata('pesan_sukses', 'Sukses Posting');
		        redirect('post','refresh');
		     }else{
		        $this->session->set_flashdata('pesan_gagal', 'Gagal Menyimpan Data Anda');
		        $this->load->view('post/posts','refresh');
	        }
		} else {
		    echo "Upload Gagal!";
		}
           	


	}

	public function insert_comment(){
		if($this->m_posts->insert_comment()==TRUE){
            $this ->session->set_flashdata('pesan_sukses', 'Sukses Posting');
	        redirect('post/detail_post/'.$this->input->post('id_posts'),'refresh');
	     }else{
	        $this->session->set_flashdata('pesan_gagal', 'Gagal Menyimpan Data Anda');
	        $this->load->view('post/detail_post/'.$this->input->post('id_posts'),'refresh');
        }
	}
	public function insert_likes(){
		// echo 'oke';
		// echo $this->input->get('id_posts');
		// echo $this->input->get('like_val');
		// die();
		if($this->m_posts->insert_likes()==TRUE){
            $this ->session->set_flashdata('pesan_sukses', 'Sukses Posting');
	        redirect('post/detail_post/'.$this->input->get('id_posts'),'refresh');
	     }else{
	        $this->session->set_flashdata('pesan_gagal', 'Gagal Menyimpan Data Anda');
	        $this->load->view('post/detail_post/'.$this->input->get('id_posts'),'refresh');
        }
	}

}

?>
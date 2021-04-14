<?php

/**
 * 
 */
class Login extends CI_Controller
{
	
	function __construct()
    {
        parent::__construct();
		$this->load->model('m_users');
	}

	public function index(){
		$data = array(
			'sign' => 0,
			'view' => 'v_login',
		 );
		$this->load->view('v_main',$data);
	}

	public function signup(){
		

		$data = array(
			'sign' => 1,
			"view" => 'v_login',
		 );
		$this->load->view('v_main',$data);

	}
	public function dosignup(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$name = $this->input->post('name');

		if($this->m_users->insert_users()==TRUE){
	        $this ->session->set_flashdata('pesan_sukses', 'Sukses Menyimpan Data Anda');
	        redirect('login','refresh');
	     }else{
	        $this->session->set_flashdata('pesan_gagal', 'Gagal Menyimpan Data Anda');
	        $this->load->view('login/signup','refresh');
        }
	}

	public function dologin(){
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));

		
        $query = $this->m_users->get_data_users();
        $query = $query->result();

        if($this->m_users->get_data_users()->num_rows()>0){
           $data=$this->m_users->get_data_users()->result();
           // var_dump($data);
           // echo $data[0]->id_users;
           // die();
            $array=array(
                'status'=> TRUE,
                'id_users'=>$data[0]->id_users,
                'username'=>$data[0]->username,
                'email'=>$data[0]->email,
                'password'=>$data[0]->password,
            );
            $this->session->set_userdata($array);
            $this->session->set_flashdata('pesan', 'Sukses Login');
            // var_dump($array);
            // die();
            redirect('post','refresh');
        }else{
            $this->session->set_flashdata('pesan_gagal','Username Atau Password Yang Anda Masukkan Salah');
            redirect('login','refresh');
        }

	}

	public function do_logout(){
        $this->session->sess_destroy();
        redirect('login', 'refresh');
    }
}

?>
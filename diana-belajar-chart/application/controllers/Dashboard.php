<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->db->from('barang');
        $data = $this->db->get()->result();
        $data['data'] = json_encode($data);
        $data['color'] = json_encode([
            '#fd0e35', '#fb937a', '#ffae9a', '#ffc9bb', '#ffe4dc', //orange
            '#987654', '#634e39', '#4a3b2c', '#33291f', '#1d1813', //choco
            '#d4d3dc', '#aaa9bb', '#81819a', '#34385c', '#0a183f', //blue
            '#ddefe5', '#bbe0cb', '#98d0b2', '#74c09a', '#009f6b', //green
        ]);
        $this->load->view('dashboard', $data);
    }
}

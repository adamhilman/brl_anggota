<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('anggota');
	}
	
    public function index()
    {
	 $data['data_anggota'] = $this->anggota->ambil_data()->result();
     $this->load->view('data/anggota',$data);
    }
}
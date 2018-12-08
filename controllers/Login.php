<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('akun_login');
 
	}
 
	function index(){
		$this->load->view('data/area_login');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
            'password' => md5($password),
            'privillege' => "1"
            );

            //untuk select * from username
        
        $data = $this->db->get_where('username',array('username'=> $username))->result();
        foreach($data as $d){
            $nr = $d->nomor_registrasi; //Untuk mengambil NR
        }

        // ---


		$cek = $this->akun_login->cek_login("username",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'uid' => $username,
				'nr' => $nr,
				'status' => "login"
				);
            // $this->session->userdata("nr"); -> untuk Mengambil
			// $this->session->set_userdata($data_session); -> untuk menyimpan
			$this->session->set_userdata($data_session);
 
			redirect(base_url("adminarea/home"));
 
		}else{
			echo "Username dan password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
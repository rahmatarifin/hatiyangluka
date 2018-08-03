<?php
class Login extends ci_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	function index(){
		$this->load->view('v_login');
	}

	function aksi_login(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$where = array(
			'username' => $username,
			'password'=>md5($password)
			);

		$cek = $this->m_login->cek_login("admin", $where)->num_rows();
		if($cek>0){
			
			$data_session = array(
				'nama'=>$username,
				'status'=> "Login");
			
			$this->session->set_userdata($data_session);

			redirect(base_url("index.php/admin"));

		}else{
			echo "Username atau password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/login'));
	}
}
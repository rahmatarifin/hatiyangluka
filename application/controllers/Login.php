<?php
class Login extends ci_controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
	}

	function index(){
		$this->load->view('templates/login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
			'username'=>$username,
			'password'=>$password
			);

		$cek = $this->m_login->cek_login("admin",$where)->num_rows();

		if ($cek>0) {
			redirect('dashboard');
		}else{
			echo('password salah');
		}
	}
		
/*
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
*/
}
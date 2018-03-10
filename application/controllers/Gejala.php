<?php
Class Gejala extends ci_controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Model_gejala');
	}

	function index(){
		$data['data']=$this->Model_gejala->tampildata();
		$this->load->view('gejala',$data);
	}
}
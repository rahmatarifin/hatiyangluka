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

	function tambah(){
		$data=array('gejalaid'=>$this->input->post('gejalaid'),
			'gejala'=>$this->input->post('gejala')
			);
		$this->model_crud->tambah('data');
		redirect('Crud_gejala');
	}
}
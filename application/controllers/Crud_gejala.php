<?php
class Crud_gejala extends ci_controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('model_crud_gejala');
	}

	function index(){
		$data['data']=$this->model_crud_gejala->tampilData();
		$this->load->view('view_crud_gejala',$data);
	}

	function tambah(){
		$data=array('gejalaid'=>$this->input->post('gejalaid'), 'gejala'=>$this->input->post('gejala')
		);
		$this->model_crud_gejala->tambah($data);
		redirect('dashboard/crud_gejala');
	}

	function edit(){
		$gejalaid=$this->uri->segment(3);
		$data['data']=$this->model_crud_gejala->per_id($gejalaid);
		$this->load->view('update_crud_gejala',$data);
	}

	function update(){
		$gejalaid=$this->input->post('gejalaid');
		$data=array('gejala'=>$this->input->post('gejala'));
		$this->model_crud_gejala->update($gejalaid, $data);
		redirect('dashboard/crud_gejala');
	}

	function hapus(){
		$gejalaid=$this->uri->segment(3);
		$this->model_crud_gejala->hapus($gejalaid);
		redirect('dashboard/crud_gejala');
	}

}
<?php
class Crud_rules extends ci_controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('model_crud_rules');
	}

	function index(){
		$data['data']=$this->model_crud_rules->tampilData();
		$this->load->view('view_crud_rules',$data);
	}

	function tambah(){
		$data=array('rules'=>$this->input->post('rules'), 'penyakitid'=>$this->input->post('penyakitid'),'gejalaid'
		);
		$this->model_crud_gejala->tambah($data);
		redirect('crud_gejala');
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
		redirect('crud_gejala');
	}

	function hapus(){
		$gejalaid=$this->uri->segment(3);
		$this->model_crud_gejala->hapus($gejalaid);
		redirect('crud_gejala');
	}

}
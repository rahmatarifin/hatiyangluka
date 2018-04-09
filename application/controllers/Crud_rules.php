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
		$data=array('rules'=>$this->input->post('rules'), 
			'penyakitid'=>$this->input->post('penyakitid'),
			'gejalaid'=>$this->input->post('gejalaid')
		);
		$this->model_crud_rules->tambah($data);
		redirect('crud_rules');
	}

	function edit(){
		$rules=$this->uri->segment(3);
		$data['data']=$this->model_crud_rules->per_id($rules);
		$this->load->view('update_crud_rules',$data);
	}

	function update(){
		$rules=$this->input->post('rules');
		$data=array('rules'=>$this->input->post('rules'));
		$this->model_crud_rules->update($rules, $data);
		redirect('crud_rules');
	}

	function hapus(){
		$rules=$this->uri->segment(3);
		$this->model_crud_rules->hapus($rules);
		redirect('crud_rules');
	}

}
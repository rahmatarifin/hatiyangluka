<?php
class Crud_penyakit extends ci_controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('model_crud_penyakit');
	}

	function index(){
		$data['data']=$this->model_crud_penyakit->tampilData();
		$this->load->view('view_crud_penyakit',$data);
	}

	function tambah(){
		$data=array('penyakitid'=>$this->input->post('penyakitid'), 'penyakit'=>$this->input->post('penyakit')
		);
		$this->model_crud_penyakit->tambah($data);
		redirect('crud_penyakit');
	}

	function edit(){
		$penyakitid=$this->uri->segment(3);
		$data['data']=$this->model_crud_penyakit->per_id($penyakitid);
		$this->load->view('update_crud_penyakit',$data);
	}

	function update(){
		$penyakitid=$this->input->post('penyakitid');
		$data=array('penyakit'=>$this->input->post('penyakit'));
		$this->model_crud_penyakit->update($penyakitid, $data);
		redirect('crud_penyakit');
	}

	function hapus(){
		$penyakitid=$this->uri->segment(3);
		$this->model_crud_penyakit->hapus($penyakitid);
		redirect('crud_penyakit');
	}

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends ci_controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('model_crud_gejala');
		$this->load->model('model_crud_penyakit');
		$this->load->model('model_crud_rules');

		if($this->session->userdata('status') != "Login"){
			redirect(base_url("index.php/login"));
		}
	}

	//function gejala
	public function index(){
		$this->load->view('templates/header_v');
		$this->load->view('templates/side_v');
		$this->load->view('templates/content_v');

		/*$this->load->view('v_crud_gejala');*/
		$this->load->view('templates/footer');
	}

	public function about(){
		$this->load->view('templates/header_v');
		$this->load->view('templates/side_v');
		$this->load->view('about');
		$this->load->view('templates/footer');
	}

	function crud_gejala(){
		
		$this->load->view('templates/header_v');
		$this->load->view('templates/side_v');
		$data['data']= $this->model_crud_gejala->tampilData();
		$this->load->view('v_crud_gejala',$data);
		$this->load->view('templates/footer');
	}

	function tambah(){
		$data=array('gejalaid'=>$this->input->post('gejalaid'), 'gejala'=>$this->input->post('gejala')
		);
		$this->model_crud_gejala->tambah($data);
		redirect('admin/crud_gejala');
	}
	
	function edit(){
		$this->load->view('templates/header_v');
		$this->load->view('templates/side_v');
		$gejalaid=$this->uri->segment(3);
		$data['data']=$this->model_crud_gejala->per_id($gejalaid);
		$this->load->view('v_update_gejala',$data);
		$this->load->view('templates/footer');
	}

	function hapus(){
		$gejalaid=$this->uri->segment(3);
		$this->model_crud_gejala->hapus($gejalaid);
		redirect('admin/crud_gejala');
	}

	//function penyakit

	function crud_penyakit(){
		
		$this->load->view('templates/header_v');
		$this->load->view('templates/side_v');
		$data['data']= $this->model_crud_penyakit->tampilData();
		$this->load->view('v_crud_penyakit',$data);
		$this->load->view('templates/footer');
	}

	function tambahp(){
		$data=array('penyakitid'=>$this->input->post('penyakitid'),
			'penyakit'=>$this->input->post('penyakit'),
			'penyebab'=>$this->input->post('penyebab'),
			'solusi'=>$this->input->post('solusi')
		);
		$this->model_crud_penyakit->tambah($data);
		redirect('admin/crud_penyakit');
	}
	
	function editp(){
		$this->load->view('templates/header_v');
		$this->load->view('templates/side_v');
		$penyakitid=$this->uri->segment(3);
		$data['data']=$this->model_crud_penyakit->per_id($penyakitid);
		$this->load->view('v_update_penyakit',$data);
		$this->load->view('templates/footer');
	}

	function hapusp(){
		$penyakitid=$this->uri->segment(3);
		$this->model_crud_penyakit->hapus($penyakitid);
		redirect('admin/crud_penyakit');
	}

	//function rules

	function crud_rules(){
		$this->load->view('templates/header_v');
		$this->load->view('templates/side_v');
		$data['data']= $this->model_crud_rules->tampilData();
		$this->load->view('v_crud_rules',$data);
		$this->load->view('templates/footer');
	}

	function tambahr(){
		$data=array('rules'=>$this->input->post('rules'),
			'penyakitid'=>$this->input->post('penyakitid'),
			'gejalaid'=>$this->input->post('gejalaid')
		);
		$this->model_crud_rules->tambah($data);
		redirect('admin/crud_rules');
	}

	function editr(){
		$this->load->view('templates/header_v');
		$this->load->view('templates/side_v');
		$rules=$this->uri->segment(3);
		$data['data']=$this->model_crud_rules->per_id($rules);
		$this->load->view('v_update_rules',$data);
		$this->load->view('templates/footer');
	}

	function hapusr(){
		$rules=$this->uri->segment(3);
		$this->model_crud_rules->hapus($rules);
		redirect('admin/crud_rules');
	}

	function tab_penyakit(){
		$this->load->view('templates/header_v');
		$this->load->view('templates/side_v');
		$data['data']= $this->model_crud_penyakit->tampilData();
		$this->load->view('v_tab_penyakit',$data);
		$this->load->view('templates/footer');
	}

	function tab_gejala(){
		$this->load->view('templates/header_v');
		$this->load->view('templates/side_v');
		$data['data']= $this->model_crud_gejala->tampilData();
		$this->load->view('v_tab_gejala',$data);
		$this->load->view('templates/footer');
	}

	function calender(){
		$this->load->view('templates/header_v');
		$this->load->view('templates/side_v');
		$this->load->view('calender');
		$this->load->view('templates/footer');
	}

	function email(){
		$this->load->view('templates/header_v');
		$this->load->view('templates/side_v');
		$this->load->view('email');
		$this->load->view('templates/footer');
	}


}
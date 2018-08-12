<?php
class Visitor extends ci_controller{
	function __constract(){
		parent::__constract();
		$this->load->model('m_visitor');
	}

	function index(){
		$this->load->view('templates/v_headervisitor');
		$this->load->view('templates/v_sidevisitor');
		$this->load->view('v_datadiri');
		$this->load->view('templates/footer');
	}

	function data_diri(){
		

		$check = $this->input->post('check_list');
		foreach ($check as $object) {
			$this->m_visitor->insert_data_diri(array('jk'=>$objeck));
		}
		redirect('Visitor');
	}



	function tesPenyakit(){
		$this->load->view('templates/v_headervisitor');
		$this->load->view('templates/v_sidevisitor');
		$this->load->view('templates/footer');
	}
}
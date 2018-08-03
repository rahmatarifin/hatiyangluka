<?php
class Visitor extends ci_controller{
	function __constract(){
		parent::__constract();
		//$this->load->model('m_visitor');
	}

	function index(){
		$this->load->view('templates/v_headervisitor');
		$this->load->view('templates/v_sidevisitor');
		$this->load->view('templates/v_content');
	}
}
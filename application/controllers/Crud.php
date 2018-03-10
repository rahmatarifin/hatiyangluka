<?php
Class Crud extends ci_controller{
	function __construct(){
		parent::__construct();
		$this->load->model('model_crud');
	}

	function index(){
		$this->load->view('CRUD_gejala',$data);
	}
}
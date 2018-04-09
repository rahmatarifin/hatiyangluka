<?php
/**
* 
*/
class Admin extends ci_controller
{
	
	function __construct()
	{
		parent::__construct();

		if($this->session->userdata('status')!="login"){
			redirect(base_url("login"));
		}
	}

	function index(){
		$this->load->controller('dasboard');
	}
}
<?php
/**
* 
*/
class M_Visitor extends ci_model{
	function insert_data_diri($data){
		$this->db->insert('visitor',$data);
	}

	function tampil_visitor(){
		return $this->db->get('visitor')-->result();
	}
}
<?php
Class Model_gejala extends ci_model{
	function tampildata(){
		$query=$this->db->get('gejala');
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return array();
		}
	}
}
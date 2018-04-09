<?php
Class Model_crud_rules extends ci_model
{
	function tampilData(){
		$query = $this->db->get('rules');
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return array();
		}
	}

	function tambah($data){
		$tambah = $this->db->insert('rules',$data);
		return $tambah;
	}

	function per_id($id){
		$this->db->where('rules', $id);
		$query = $this->db->get('rules');
		return $query->result();
	}

	function hapus($id){
		$this->db->where('rules',$id);
		$hapus=$this->db->delete('rules');
		return $hapus;
	}

	function update($id, $data){
		$this->db->where('rules',$id);
		$update=$this->db->update('rules',$data);
		return $update;
	}


}
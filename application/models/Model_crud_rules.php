<?php
Class Model_crud_gejala extends ci_model
{
	function tampilData(){
		$query = $this->db->get('gejala');
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return array();
		}
	}

	function tambah($data){
		$tambah = $this->db->insert('gejala',$data);
		return $tambah;
	}

	function per_id($id){
		$this->db->where('gejalaid', $id);
		$query = $this->db->get('gejala');
		return $query->result();
	}

	function hapus($id){
		$this->db->where('gejalaid',$id);
		$hapus=$this->db->delete('gejala');
		return $hapus;
	}

	function update($id, $data){
		$this->db->where('gejalaid',$id);
		$update=$this->db->update('gejala',$data);
		return $update;
	}


}
<?php
Class Model_crud_penyakit extends ci_model
{
	function tampilData(){
		$query = $this->db->get('penyakit');
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return array();
		}
	}

	function tambah($data){
		$tambah = $this->db->insert('penyakit',$data);
		return $tambah;
	}

	function per_id($id){
		$this->db->where('penyakitid', $id);
		$query = $this->db->get('penyakit');
		return $query->result();
	}

	function hapus($id){
		$this->db->where('penyakitid',$id);
		$hapus=$this->db->delete('penyakit');
		return $hapus;
	}

	function update($id, $data){
		$this->db->where('penyakitid',$id);
		$update=$this->db->update('penyakit',$data);
		return $update;
	}


}
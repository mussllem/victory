<?php
Class M_packages Extends CI_Model{

	function t_packages($data){
		$this->db->insert('tb_packages',$data);
	}

	function show(){
		$query = $this->db->query("SELECT * FROM tb_packages ORDER BY id ASC");
		return $query->result();
	}

	function detail($id){
		$query = $this->db->query("SELECT * FROM tb_packages WHERE id='$id'");
		return $query->result();
	}

	function update($id){
		$query = $this->db->query("SELECT * FROM tb_packages WHERE id='$id'");
		return $query->result();
	}

	function u_packages($id,$data){
		$this->db->where('id',$id);
		$this->db->update('tb_packages',$data);
	}

	function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('tb_packages');
	}
}
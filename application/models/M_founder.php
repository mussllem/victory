<?php

Class M_founder Extends CI_Model{

	function t_founder($data){
		$this->db->insert('tb_founder',$data);
	}

	function team_founder(){
		$this->db->select('*');
		$this->db->from('tb_founder');
		$this->db->where('status','founder');

		return $this->db->get();
	}

	function team_creative(){
		$this->db->select('*');
		$this->db->from('tb_founder');
		$this->db->where('status','team');

		return $this->db->get();
	}	

	function show(){
		$query = $this->db->query("SELECT * FROM tb_founder ORDER BY id DESC");
		return $query->result();
	}

	function detail($id){
		$query = $this->db->query("SELECT * FROM tb_founder WHERE id='$id'");
		return $query->result();

	}

	function update($id){
		$query = $this->db->query("SELECT * FROM tb_founder WHERE id='$id'");
		return $query->result();

	}

	function u_founder($id,$data){
		$this->db->where('id',$id);
		$this->db->update('tb_founder',$data);

	}

	function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('tb_founder');
	}

}
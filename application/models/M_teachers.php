<?php

Class M_teachers Extends CI_Model{
	
	function t_teachers($data){
		$this->db->insert('tb_teacher',$data);
	}

	function show(){
		$query = $this->db->query("SELECT * FROM tb_teacher");
		return $query->result();
	}

	function detail($id){
		$query= $this->db->query("SELECT * FROM tb_teacher WHERE id='$id'");
		return $query->result();
	}

	function update($id){
		$query= $this->db->query("SELECT * FROM tb_teacher WHERE id='$id'");
		return $query->result();
	}

	function u_teacher($id,$data){
		$this->db->where('id',$id);
		$this->db->update('tb_teacher',$data);
	}

	function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('tb_teacher');
	}
}
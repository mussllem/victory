<?php

Class M_faq Extends CI_Model{

	function t_faq($data){
		$this->db->insert('tb_faq',$data);
	}

	function show(){
		$query = $this->db->query("SELECT * FROM tb_faq");
		return $query->result();
	}

	function update($id){
		$query = $this->db->query("SELECT * FROM tb_faq WHERE id='$id'");
		return $query->result();
	}

	function u_faq($id,$data){
		$this->db->where('id',$id);
		$this->db->update('tb_faq',$data);
	}

	function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('tb_faq');
	}
}
<?php

Class M_mentor Extends CI_Model{

	function t_mentor($data){
		$this->db->insert('tb_mentor',$data);
	}

	function show($ket){
		$query = $this->db->query("SELECT * FROM tb_mentor WHERE ket='$ket'");
		return $query->result();
	}

	function show_all(){
		$query = $this->db->query("SELECT * FROM tb_mentor");
		return $query->result();
	}

	function detail($id){
		$query = $this->db->query("SELECT * FROM tb_mentor WHERE id='$id'");
		return $query->result();
	}

	function update($id){
		$query = $this->db->query("SELECT * FROM tb_mentor WHERE id='$id'");
		return $query->result();
	}

	function u_mentor($id,$data){
		$this->db->where('id',$id);
		$this->db->update('tb_mentor',$data);
	}

	function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('tb_mentor');
	}
}
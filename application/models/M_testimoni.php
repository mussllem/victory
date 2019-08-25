<?php

Class M_testimoni Extends CI_Model{

	function t_testimoni($data){
		$this->db->insert('tb_testimoni',$data);
	}

	function show(){
		$query =  $this->db->query("SELECT * FROM tb_testimoni");
		return $query->result();
	}

	function update($id){
		$query = $this->db->query("SELECT * FROM tb_testimoni WHERE id='$id'");
		return $query->result();
	}

	function u_testimoni($id,$data){
		$this->db->where('id',$id);
		$this->db->update('tb_testimoni',$data);
	}

	function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('tb_testimoni');
	}
}
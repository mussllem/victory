<?php

Class Victory_mengabdi Extends CI_Controller{

	public function __construct(){
		parent:: __construct();
		$this->load->model('m_testimoni');

	}

	function index(){

		$data['testimoni'] = $this->m_testimoni->show();
		$data['mengabdis'] = $this->db->get('tb_victory_mengabdi')->result();

		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('victory_mengabdi',$data);
		$this->load->view('footer');
	}
}
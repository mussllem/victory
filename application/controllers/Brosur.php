<?php

Class Brosur Extends CI_Controller{

	public function __construct(){
		parent:: __construct();
	}

	function index(){
		$data['brosurs'] = $this->db->get('tb_brosur')->result();		
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('brosur',$data);
		$this->load->view('footer');
	}

}
<?php

Class Gallery Extends CI_Controller{

	public function __construct(){
		parent:: __construct();
	}

	function index(){
		$data['gallerys'] = $this->db->get('tb_gallery')->result();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('gallery',$data);
		$this->load->view('footer');
	}
}
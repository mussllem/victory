<?php

Class Home Extends CI_Controller{

	public function __construct(){
		parent:: __construct();
		$this->load->model("m_testimoni");
	}

	function index(){
		$data['testimoni'] = $this->m_testimoni->show();

		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('home',$data);
		$this->load->view('footer');
	}
}
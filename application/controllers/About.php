<?php

Class About Extends CI_Controller{

	public function __construct(){
		parent:: __construct();
		$this->load->model("m_founder");
		$this->load->model("m_faq");
		$this->load->model("m_testimoni");
	}

	function index(){

		$data['founder']	= $this->m_founder->show();
		$data['faq']		= $this->m_faq->show();
		$data['testimoni']	= $this->m_testimoni->show();
		$data['keunggulans']= $this->db->get('tb_keunggulan')->result();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('about',$data);
		$this->load->view('footer');
	}

	function detail(){
		$data['testimoni']	= $this->m_testimoni->show();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('d_about',$data);
		$this->load->view('footer');
	}
}
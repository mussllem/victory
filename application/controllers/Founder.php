<?php

Class Founder Extends CI_Controller{

	public function __construct(){

		parent:: __construct();
		$this->load->model("m_founder");
		$this->load->model("m_testimoni");
	}

	public function index(){
		$data['team_founders']	= $this->m_founder->team_founder()->result();
		$data['team_creatives']	= $this->m_founder->team_creative()->result();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('d_founder',$data);
		$this->load->view('footer');
	}

	function detail(){

		$id = $this->input->post('id');
		$data['founder']	= $this->m_founder->detail($id);
		$data['testimoni']	= $this->m_testimoni->show();

		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('founder',$data);
		$this->load->view('footer');
	}
}
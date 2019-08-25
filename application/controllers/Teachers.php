<?php

Class Teachers Extends CI_Controller{

	public function __construct(){

		parent:: __construct();
		$this->load->model("m_teachers");
		$this->load->model("m_testimoni");
		
	}

	function index(){

		$data['teachers']	= $this->m_teachers->show();
		$data['testimoni']	= $this->m_testimoni->show();

		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('teachers',$data);
		$this->load->view('footer');
	}

	function detail(){

		$id = $this->input->post('id');
		$data['teachers']	= $this->m_teachers->detail($id);
		$data['testimoni']	= $this->m_testimoni->show();

		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('d_teacher',$data);
		$this->load->view('footer');
	}
}
<?php

Class Partners Extends CI_Controller{

	public function __construct(){
		parent:: __construct();
		$this->load->model('m_mentor');
		$this->load->model("m_testimoni");
		
	}

	function degree(){
		$ket = 'degree';
		$data['mentor']	= $this->m_mentor->show($ket);
		$data['testimoni']	= $this->m_testimoni->show();

		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('partner',$data);
		$this->load->view('footer');
	}

	function ndegree(){
		$ket	= 'ndegree';
		$data['mentor']	= $this->m_mentor->show($ket);
		$data['testimoni']	= $this->m_testimoni->show();
	
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('partner',$data);
		$this->load->view('footer');
	}

	function detail(){
		$id = $this->input->post('id');
		$data['mentor']		= $this->m_mentor->detail($id);
		$data['testimoni']	= $this->m_testimoni->show();

		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('d_mentor',$data);
		$this->load->view('footer');
	}
}
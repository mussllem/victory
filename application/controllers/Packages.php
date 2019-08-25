<?php

Class Packages Extends CI_Controller{

	public function __construct(){
		parent:: __construct();
		$this->load->model("m_testimoni");
		$this->load->model("m_packages");
		
	}

	function index(){

		$data['testimoni']	= $this->m_testimoni->show();
		$data['packages']	= $this->m_packages->show();

		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('service_packages',$data);
		$this->load->view('footer');
	}

	function detail(){

		$id = $this->input->post('id');
		$data['packages'] = $this->m_packages->detail($id);
		$data['testimoni']	= $this->m_testimoni->show();
		$data['mentors'] = $this->db->get_where('tb_mentor',array('id'=> 28))->result();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('d_packages',$data);
		$this->load->view('footer');
	}
}
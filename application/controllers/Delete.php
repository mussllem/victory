<?php
Class Delete Extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('m_faq');
		$this->load->model('m_packages');
		$this->load->model('m_founder');
		$this->load->model('m_mentor');
		$this->load->model('m_teachers');
		$this->load->model('m_testimoni');

	}

	function faq(){
		$id = $this->uri->segment(3);
		$this->m_faq->delete($id);
		redirect ('panel/faq');
	}

	function packages(){
		$id = $this->uri->segment(3);
		$this->m_packages->delete($id);
		redirect ('panel/packages');
	}

	function founder(){
		$id = $this->uri->segment(3);
		$this->m_founder->delete($id);
		redirect ('panel/founder');
	}

	function mentor(){
		$id = $this->uri->segment(3);
		$this->m_mentor->delete($id);
		redirect ('panel/mentor');
	}

	function teachers(){
		$id = $this->uri->segment(3);
		$this->m_teachers->delete($id);
		redirect ('panel/teachers');
	}

	function testimoni(){
		$id = $this->uri->segment(3);
		$this->m_testimoni->delete($id);
		redirect ('panel/testimoni');
	}


}
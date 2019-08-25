<?php

Class Update Extends CI_COntroller{

	public function __construct(){
		parent:: __construct();
		$this->load->model('m_faq');
		$this->load->model('m_packages');
		$this->load->model('m_founder');
		$this->load->model('m_mentor');
		$this->load->model('m_teachers');
		$this->load->model('m_testimoni');
	}

	public function faq(){
		$data['title']		= 'FAQ';
		$session_data 		= $this->session->userdata('logged_in');
		$data['username']	= $session_data['username'];
		$data['nama']		= $session_data['nama'];

		$id = $this->uri->segment(3);
		$data['faq']		= $this->m_faq->update($id);

		$data['header'] 	= $this->load->view('panel/header',$data);
		$data['menu']		= $this->load->view('panel/menu',$data);
		$data['konten']		= $this->load->view('panel/u_faq',$data);
		$data['footer'] 	= $this->load->view('panel/footer');
		$this->load->view('panel/main',$data);

	}

	public function packages(){
		$data['title']		= 'Packages';
		$session_data 		= $this->session->userdata('logged_in');
		$data['username']	= $session_data['username'];
		$data['nama']		= $session_data['nama'];

		$id = $this->uri->segment(3);
		$data['packages']		= $this->m_packages->update($id);

		$data['header'] 	= $this->load->view('panel/header',$data);
		$data['menu']		= $this->load->view('panel/menu',$data);
		$data['konten']		= $this->load->view('panel/u_packages',$data);
		$data['footer'] 	= $this->load->view('panel/footer');
		$this->load->view('panel/main',$data);

	}

	public function founder(){
		$data['title']		= 'Founder';
		$session_data 		= $this->session->userdata('logged_in');
		$data['username']	= $session_data['username'];
		$data['nama']		= $session_data['nama'];

		$id = $this->uri->segment(3);
		$data['founder']	= $this->m_founder->update($id);

		$data['header'] 	= $this->load->view('panel/header',$data);
		$data['menu']		= $this->load->view('panel/menu',$data);
		$data['konten']		= $this->load->view('panel/u_founder',$data);
		$data['footer'] 	= $this->load->view('panel/footer');
		$this->load->view('panel/main',$data);

	}

	public function mentor(){
		$data['title']		= 'Mentor';
		$session_data 		= $this->session->userdata('logged_in');
		$data['username']	= $session_data['username'];
		$data['nama']		= $session_data['nama'];

		$id = $this->uri->segment(3);
		$data['mentor']	= $this->m_mentor->update($id);

		$data['header'] 	= $this->load->view('panel/header',$data);
		$data['menu']		= $this->load->view('panel/menu',$data);
		$data['konten']		= $this->load->view('panel/u_mentor',$data);
		$data['footer'] 	= $this->load->view('panel/footer');
		$this->load->view('panel/main',$data);

	}

	public function teachers(){
		$data['title']		= 'Teachers';
		$session_data 		= $this->session->userdata('logged_in');
		$data['username']	= $session_data['username'];
		$data['nama']		= $session_data['nama'];

		$id = $this->uri->segment(3);
		$data['teachers']	= $this->m_teachers->update($id);

		$data['header'] 	= $this->load->view('panel/header',$data);
		$data['menu']		= $this->load->view('panel/menu',$data);
		$data['konten']		= $this->load->view('panel/u_teacher',$data);
		$data['footer'] 	= $this->load->view('panel/footer');
		$this->load->view('panel/main',$data);

	}

	public function testimoni(){
		$data['title']		= 'Testimoni';
		$session_data 		= $this->session->userdata('logged_in');
		$data['username']	= $session_data['username'];
		$data['nama']		= $session_data['nama'];

		$id = $this->uri->segment(3);
		$data['testimoni']	= $this->m_testimoni->update($id);

		$data['header'] 	= $this->load->view('panel/header',$data);
		$data['menu']		= $this->load->view('panel/menu',$data);
		$data['konten']		= $this->load->view('panel/u_testimoni',$data);
		$data['footer'] 	= $this->load->view('panel/footer');
		$this->load->view('panel/main',$data);

	}
}
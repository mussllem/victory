<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {
	
	 public function __construct()
		 {
		 parent::__construct();
		 $this->load->model('m_founder');
		 $this->load->model('m_mentor');
		 $this->load->model('m_teachers');
		 $this->load->model('m_faq');
		 $this->load->model('m_testimoni');
		 $this->load->model('m_packages');

		}

	public function index(){
		$data['title']		= 'Home';
		$session_data 		= $this->session->userdata('logged_in');
		$data['username']	= $session_data['username'];
		$data['nama']		= $session_data['nama'];

		$data['testimoni']	= $this->m_testimoni->show();

		$data['header'] 	= $this->load->view('panel/header',$data);
		$data['menu']		= $this->load->view('panel/menu',$data);
		$data['konten']		= $this->load->view('panel/home',$data);
		$data['footer'] 	= $this->load->view('panel/footer');
		$this->load->view('panel/main',$data);

	}

	public function packages(){
		$data['title']		= 'Packages';
		$session_data 		= $this->session->userdata('logged_in');
		$data['username']	= $session_data['username'];
		$data['nama']		= $session_data['nama'];

		$data['packages']	= $this->m_packages->show();

		$data['header'] 	= $this->load->view('panel/header',$data);
		$data['menu']		= $this->load->view('panel/menu',$data);
		$data['konten']		= $this->load->view('panel/packages',$data);
		$data['footer'] 	= $this->load->view('panel/footer');
		$this->load->view('panel/main',$data);

	}

	public function founder(){
		$data['title']		= 'Founder';
		$session_data 		= $this->session->userdata('logged_in');
		$data['username']	= $session_data['username'];
		$data['nama']		= $session_data['nama'];

		$data['founder']	= $this->m_founder->show();

		$data['header'] 	= $this->load->view('panel/header',$data);
		$data['menu']		= $this->load->view('panel/menu',$data);
		$data['konten']		= $this->load->view('panel/founder',$data);
		$data['footer'] 	= $this->load->view('panel/footer');
		$this->load->view('panel/main',$data);

	}

	public function mentor(){
		$data['title']		= 'Mentor';
		$session_data 		= $this->session->userdata('logged_in');
		$data['username']	= $session_data['username'];
		$data['nama']		= $session_data['nama'];

		$data['mentor']	= $this->m_mentor->show_all();

		$data['header'] 	= $this->load->view('panel/header',$data);
		$data['menu']		= $this->load->view('panel/menu',$data);
		$data['konten']		= $this->load->view('panel/mentor',$data);
		$data['footer'] 	= $this->load->view('panel/footer');
		$this->load->view('panel/main',$data);

	}

	public function teachers(){
		$data['title']		= 'Teachers';
		$session_data 		= $this->session->userdata('logged_in');
		$data['username']	= $session_data['username'];
		$data['nama']		= $session_data['nama'];

		$data['teachers']	= $this->m_teachers->show();

		$data['header'] 	= $this->load->view('panel/header',$data);
		$data['menu']		= $this->load->view('panel/menu',$data);
		$data['konten']		= $this->load->view('panel/teachers',$data);
		$data['footer'] 	= $this->load->view('panel/footer');
		$this->load->view('panel/main',$data);

	}

	public function faq(){
		$data['title']		= 'FAQ';
		$session_data 		= $this->session->userdata('logged_in');
		$data['username']	= $session_data['username'];
		$data['nama']		= $session_data['nama'];

		$data['faq']	= $this->m_faq->show();

		$data['header'] 	= $this->load->view('panel/header',$data);
		$data['menu']		= $this->load->view('panel/menu',$data);
		$data['konten']		= $this->load->view('panel/faq',$data);
		$data['footer'] 	= $this->load->view('panel/footer');
		$this->load->view('panel/main',$data);

	}

	public function testimoni(){
		$data['title']		= 'Testimoni';
		$session_data 		= $this->session->userdata('logged_in');
		$data['username']	= $session_data['username'];
		$data['nama']		= $session_data['nama'];

		$data['testimoni']	= $this->m_testimoni->show();

		$data['header'] 	= $this->load->view('panel/header',$data);
		$data['menu']		= $this->load->view('panel/menu',$data);
		$data['konten']		= $this->load->view('panel/testimoni',$data);
		$data['footer'] 	= $this->load->view('panel/footer');
		$this->load->view('panel/main',$data);

	}


}
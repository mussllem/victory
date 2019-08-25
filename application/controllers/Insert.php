<?php

Class Insert Extends CI_COntroller{

	public function packages(){
		$data['title']		= 'Packages';
		$session_data 		= $this->session->userdata('logged_in');
		$data['username']	= $session_data['username'];
		$data['nama']		= $session_data['nama'];

		$data['header'] 	= $this->load->view('panel/header',$data);
		$data['menu']		= $this->load->view('panel/menu',$data);
		$data['konten']		= $this->load->view('panel/t_packages',$data);
		$data['footer'] 	= $this->load->view('panel/footer');
		$this->load->view('panel/main',$data);

	}

	public function founder(){
		$data['title']		= 'Founder';
		$session_data 		= $this->session->userdata('logged_in');
		$data['username']	= $session_data['username'];
		$data['nama']		= $session_data['nama'];

		$data['header'] 	= $this->load->view('panel/header',$data);
		$data['menu']		= $this->load->view('panel/menu',$data);
		$data['konten']		= $this->load->view('panel/t_founder',$data);
		$data['footer'] 	= $this->load->view('panel/footer');
		$this->load->view('panel/main',$data);

	}

	public function mentor(){
		$data['title']		= 'Mentor';
		$session_data 		= $this->session->userdata('logged_in');
		$data['username']	= $session_data['username'];
		$data['nama']		= $session_data['nama'];

		$data['header'] 	= $this->load->view('panel/header',$data);
		$data['menu']		= $this->load->view('panel/menu',$data);
		$data['konten']		= $this->load->view('panel/t_mentor',$data);
		$data['footer'] 	= $this->load->view('panel/footer');
		$this->load->view('panel/main',$data);

	}

	public function teachers(){
		$data['title']		= 'Teachers';
		$session_data 		= $this->session->userdata('logged_in');
		$data['username']	= $session_data['username'];
		$data['nama']		= $session_data['nama'];

		$data['header'] 	= $this->load->view('panel/header',$data);
		$data['menu']		= $this->load->view('panel/menu',$data);
		$data['konten']		= $this->load->view('panel/t_teacher',$data);
		$data['footer'] 	= $this->load->view('panel/footer');
		$this->load->view('panel/main',$data);

	}

	public function faq(){
		$data['title']		= 'FAQ';
		$session_data 		= $this->session->userdata('logged_in');
		$data['username']	= $session_data['username'];
		$data['nama']		= $session_data['nama'];

		$data['header'] 	= $this->load->view('panel/header',$data);
		$data['menu']		= $this->load->view('panel/menu',$data);
		$data['konten']		= $this->load->view('panel/t_faq',$data);
		$data['footer'] 	= $this->load->view('panel/footer');
		$this->load->view('panel/main',$data);

	}

	public function testimoni(){
		$data['title']		= 'Tstimoni';
		$session_data 		= $this->session->userdata('logged_in');
		$data['username']	= $session_data['username'];
		$data['nama']		= $session_data['nama'];

		$data['header'] 	= $this->load->view('panel/header',$data);
		$data['menu']		= $this->load->view('panel/menu',$data);
		$data['konten']		= $this->load->view('panel/t_testimoni',$data);
		$data['footer'] 	= $this->load->view('panel/footer');
		$this->load->view('panel/main',$data);

	}
}
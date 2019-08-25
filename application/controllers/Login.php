<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('logged_in')){
			redirect ('panel','refresh');
		}else{
		$this->load->view('panel/login');
	}
	}

	public function verifikasi()
	{
		$this->load->model('m_login');
		$this->form_validation->set_rules('username','Username','trim|required|xss_clean');
		$this->form_validation->set_rules('password','Password','trim|required|xss_clean|callback_check_username');
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			redirect ('validasi');
		}
	}

	public function check_username($password){
		$username 	= $this->input->post('username');
		$result		= $this->m_login->login($username,$password);
		if ($result){
			foreach ($result as $data) {
				$sess_array = array('nama'		=>$data->nama,
									'username'	=>$data->username,
									'password'	=>$data->password);
				$this->session->set_userdata('logged_in',$sess_array);
			}
			return TRUE;

		}else{
			$this->form_validation->set_message('check_username','Username atau Password anda salah.');
			return FALSE;
		}
	}
}

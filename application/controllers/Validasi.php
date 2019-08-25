<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validasi extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
				$data['username'] = $session_data['username'];
				redirect ('panel',$data);
		}else{
		redirect ('login','refresh');
	}
	}
}

<?php 
Class Logout Extends CI_Controller{
	public function index(){
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect ('login');
	}
}
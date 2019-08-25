<?php

Class Contact Extends CI_Controller{

	function index(){
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('contact');
		$this->load->view('footer');
	}
}
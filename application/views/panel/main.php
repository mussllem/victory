<?php 
error_reporting(0);
session_start();

if($this->session->userdata('logged_in')){
$session_data = $this->session->userdata('logged_in');

?>
<?php $konten;?>
<?php }else{
	redirect ('login');
} ?>
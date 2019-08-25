<?php
Class Save extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('m_founder');
		$this->load->model('m_mentor');
		$this->load->model('m_teachers');
		$this->load->model('m_faq');
		$this->load->model('m_testimoni');
		$this->load->model('m_packages');
	} 

	function packages_update(){
		$id = $this->input->post('id');
		$data = array('nama'	 => $this->input->post('nama'),
					  'price'	 => $this->input->post('price'),
					  'list'	 => $this->input->post('list'),
					  'deskripsi'=> $this->input->post('deskripsi'));
		$this->m_packages->u_packages($id,$data);
		redirect ('panel/packages');
	}

	function packages(){
		$data = array('nama'	 => $this->input->post('nama'),
					  'price'	 => $this->input->post('price'),
					  'list'	 => $this->input->post('list'),
					  'deskripsi'=> $this->input->post('deskripsi'));
		$this->m_packages->t_packages($data);
		redirect ('panel/packages');
	}

	function founder(){
		 $config['upload_path'] = 'theme/img/founder/';//lokasi folder yang akan digunakan untuk menyimpan file
		 $config['allowed_types'] = 'gif|jpg|png|JPEG'; //extension yang diperbolehkan untuk diupload
		 $config['file_name'] = url_title($this->input->post('gambar'));
		 
		$this->upload->initialize($config); //meng set config yang sudah di atur
		 if( !$this->upload->do_upload('gambar'))
		 {
		 
		 echo $this->upload->display_errors();
		 }
		 else{
		 $data = array('nama'		=> $this->input->post('nama'),
					   'profil'		=> $this->input->post('profil'),
					   'jobdesk'	=> $this->input->post('jobdesk'),
					   'foto'		=> $this->upload->file_name

		 				);
		 $this->m_founder->t_founder($data);
		 redirect ('panel/founder');
		}
	}

	function founder_update(){
		$id = $this->input->post('id');
		$data	= array('nama'	 => $this->input->post('nama'),
						'profil' => $this->input->post('profil'),
						'jobdesk'=> $this->input->post('jobdesk'));
		$this->m_founder->u_founder($id,$data);
		redirect('panel/founder');
	}

	function mentor(){
		 $config['upload_path'] = 'theme/img/mentor/';//lokasi folder yang akan digunakan untuk menyimpan file
		 $config['allowed_types'] = 'gif|jpg|png|JPEG'; //extension yang diperbolehkan untuk diupload
		 $config['file_name'] = url_title($this->input->post('gambar'));
		 
		$this->upload->initialize($config); //meng set config yang sudah di atur
		 if( !$this->upload->do_upload('gambar'))
		 {
		 
		 echo $this->upload->display_errors();
		 }
		 else{
		 $data = array('nama'		=> $this->input->post('nama'),
					   'profil'		=> $this->input->post('profil'),
					   'foto'		=> $this->upload->file_name,
					   'ket'		=> $this->input->post('ket')

		 				);
		 $this->m_mentor->t_mentor($data);
		 redirect ('panel/mentor');
		}
	}

	function mentor_update(){
		$id = $this->input->post('id');
		$data = array('nama'	=> $this->input->post('nama'),
					  'profil'	=> $this->input->post('profil'));
		$this->m_mentor->u_mentor($id,$data);
		redirect ('panel/mentor');
	}

	function teachers(){
		 $config['upload_path'] = 'theme/img/teacher/';//lokasi folder yang akan digunakan untuk menyimpan file
		 $config['allowed_types'] = 'gif|jpg|png|JPEG'; //extension yang diperbolehkan untuk diupload
		 $config['file_name'] = url_title($this->input->post('gambar'));
		 
		$this->upload->initialize($config); //meng set config yang sudah di atur
		 if( !$this->upload->do_upload('gambar'))
		 {
		 
		 echo $this->upload->display_errors();
		 }
		 else{
		 $data = array('nama'		=> $this->input->post('nama'),
					   'profil'		=> $this->input->post('profil'),
					   'foto'		=> $this->upload->file_name

		 				);
		 $this->m_teachers->t_teachers($data);
		 redirect ('panel/teachers');
		}
	}

	function teacher_update(){
		$id = $this->input->post('id');
		$data = array('nama'	=> $this->input->post('nama'),
					  'profil'	=> $this->input->post('profil'));
		$this->m_teachers->u_teacher($id,$data);
		redirect ('panel/teachers');
	}

	function faq(){
		 $data = array('question'	=> $this->input->post('question'),
					   'answer'		=> $this->input->post('answer')
		 				);
		 $this->m_faq->t_faq($data);
		 redirect ('panel/faq');
		}

	function faq_update(){
		$id = $this->input->post('id');
		 $data = array('question'	=> $this->input->post('question'),
					   'answer'		=> $this->input->post('answer')
		 				);
		 $this->m_faq->u_faq($id,$data);
		 redirect ('panel/faq');
		}

	function testimoni(){
		 $config['upload_path'] = 'theme/img/testimoni/';//lokasi folder yang akan digunakan untuk menyimpan file
		 $config['allowed_types'] = 'gif|jpg|png|jpeg'; //extension yang diperbolehkan untuk diupload
		 $config['file_name'] = url_title($this->input->post('gambar'));
		 
		$this->upload->initialize($config); //meng set config yang sudah di atur
		 if( !$this->upload->do_upload('gambar'))
		 {
		 
		 echo $this->upload->display_errors();
		 }
		 else{
		 $data = array('nama'		=> $this->input->post('nama'),
					   'profesi'	=> $this->input->post('profesi'),
					   'testimoni'	=> $this->input->post('testimoni'),
					   'foto'		=> $this->upload->file_name

		 				);
		 $this->m_testimoni->t_testimoni($data);
		 redirect ('panel/testimoni');
		}
	}

	function testimoni_update(){
		$id = $this->input->post('id');
		$data = array('nama'		=> $this->input->post('nama'),
					  'profesi'		=> $this->input->post('profesi'),
					  'testimoni'	=> $this->input->post('testimoni'));
		$this->m_testimoni->u_testimoni($id,$data);
		redirect ('panel/testimoni');
	}
}
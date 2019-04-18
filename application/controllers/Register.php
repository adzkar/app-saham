<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$this->load->view('register_view');
	}

	public function input()
	{
		$this->form_validation->set_rules('full_name', 'Full Name','required');
		$this->form_validation->set_rules('username', 'Username','required|min_length[5]');
		$this->form_validation->set_rules('password', 'password','required');
		$this->form_validation->set_rules('passconf', 'Password Confirmation','required');
		if (!$this->form_validation->run()) {
			$this->session->set_flashdata('errors',validation_errors());	
			redirect('register');
		}
		echo 'hola';
	}

}

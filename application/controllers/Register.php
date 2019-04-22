<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model(['User']);
        if ($this->session->userdata('status_login')) {
			redirect('admin');
		}
    }

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
		if ($this->input->post('password') != $this->input->post('passconf')) {
			$this->session->set_flashdata('errors',"Confirmation Password doesn't match");	
			redirect('register');	
		}
		$user = User::where(['username' => $this->input->post('username')])->get();
		if ($user->count()) {
			$this->session->set_flashdata('errors',"The username has been taken");	
			redirect('register');
		}
		$save = User::create([
			'full_name' => $this->input->post('full_name'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		]);
		if ($save) {
			$this->session->set_flashdata('success','Account has been created');	
			redirect('register');
		} else {
			$this->session->set_flashdata('errors','Unsuccessfully creat the account');	
			redirect('register');
		}
	}

}

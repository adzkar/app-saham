<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->view('login_view');
	}

	public function post()
	{
		$user = User::where([
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		])->first();
		if ($user->count()) {
			$this->session->set_userdata([
				'status_login' => 1,
				'data_user' => [
					'full_name' => $user->full_name,
					'username' => $user->username,
					'id' => $user->id_user
				]
			]);
			redirect('admin');
		} else {
			$this->session->set_flashdata('errors',"Username / Password doesn't match");
			redirect();
		}
	}
}

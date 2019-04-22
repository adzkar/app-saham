<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model(['Tobinsq']);
        if (!$this->session->userdata('status_login')) {
			redirect(base_url());
		}
    }
	
	public function index()
	{	
		$data = [
			'url' => base_url('index.php/admin/')
		];
		$this->template->view($data);
	}

	public function manage_user()
	{
		$data = [
			'url' => base_url('index.php/admin/'),
			'title' => 'Manage User',
			'content' => 'admin/managa_user_view'
		];
		$this->template->view($data);
	}

	public function data($param = null)
	{
		$content = 'admin/view_data';
		if ($param == "insert") {
			$content = 'admin/input_data';
		}
		$data = [
			'url' => base_url('index.php/admin/'),
			'title' => 'Data Saham',
			'content' => $content,
			'data' => [
				'data' => Tobinsq::All()
			]
		];
		$this->template->view($data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

	public function edittobinsq($id = null)
	{
		if (!$id) {
			alert('Id Can\'t be null');
			redirect('admin/data/view');
		}
		$data = [
			'url' => base_url('index.php/admin/'),
			'title' => 'Data Saham',
			'content' => 'admin/edit_tobinsq',
			'data' => [
				'data' => Tobinsq::find($id)->first()
			]
		];
		$this->template->view($data);
	}

}

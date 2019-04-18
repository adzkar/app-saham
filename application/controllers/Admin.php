<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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

	public function data()
	{
		$data = [
			'url' => base_url('index.php/admin/'),
			'title' => 'Data Saham'
		];
		$this->template->view($data);
	}

}

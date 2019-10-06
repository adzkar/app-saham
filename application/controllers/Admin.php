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
		$data = Tobinsq::All();
		if ($param == "insert") {
			// generate kode
			$a = "AAAA";
			if ($data->count()) {
				$a = $data[$data->count()-1]->kode;
				$i = strlen($a) - 1;
				while (ord($a[$i]) >= 122 || ( ord($a[$i]) >= 90 && ord($a[$i]) <= 97 ))
					$i--;
				$a[$i] = chr(ord($a[$i]) + 1);
			}
			$data = $a;
			$content = 'admin/input_data';
		}
		$data = [
			'url' => base_url('index.php/admin/'),
			'title' => 'Data Saham',
			'content' => $content,
			'data' => [
				'data' => $data
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
				'data' => Tobinsq::find($id)
			]
		];
		$this->template->view($data);
	}

}

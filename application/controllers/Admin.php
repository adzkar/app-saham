<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/components/menu_view');
		$this->load->view('admin/blank_view');
		$this->load->view('admin/components/footer_view');
	}
}

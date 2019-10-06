<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tobinsq_c extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model(['Tobinsq']);
        if (!$this->session->userdata('status_login')) {
			redirect(base_url());
		}
    }

	public function addtobinsq()
	{
		$this->form_validation->set_rules('kode', 'Full Name','required');
		$this->form_validation->set_rules('closing_price', 'Closing Price','required|numeric');
		$this->form_validation->set_rules('list_share', 'List Share','required|numeric');
		$this->form_validation->set_rules('debt', 'Debt','required|numeric');
		$this->form_validation->set_rules('assets', 'Assets','required|numeric');
		$this->form_validation->set_rules('piutang', 'piutang','required|numeric');
		$this->form_validation->set_rules('hutang', 'hutang','required|numeric');
		$this->form_validation->set_rules('modal', 'modal','required|numeric');
		$this->form_validation->set_rules('pendapatan', 'pendapatan','required|numeric');
		$this->form_validation->set_rules('eps', 'eps','required|numeric');
		$this->form_validation->set_rules('roa', 'roa','required|decimal');
		$this->form_validation->set_rules('roe', 'roe','required|decimal');
		$this->form_validation->set_rules('dar', 'dar','required|decimal');
		$this->form_validation->set_rules('der', 'der','required|decimal');
		$this->form_validation->set_rules('pbv', 'pbv','required|numeric');
		if (!$this->form_validation->run()) {
			$this->session->set_flashdata('errors',validation_errors());	
			redirect('admin/data/insert');
		}
		$save = Tobinsq::create([
			'kode' => $this->input->post('kode'),
			'closing_price' => $this->input->post('closing_price'),
			'list_share' => $this->input->post('list_share'),
			'debt' => $this->input->post('debt'),
			'assets' => $this->input->post('assets'),
			'piutang' => $this->input->post('piutang'),
			'hutang' => $this->input->post('hutang'),
			'modal' => $this->input->post('modal'),
			'pendapatan' => $this->input->post('pendapatan'),
			'eps' => $this->input->post('eps'),
			'roa' => $this->input->post('roa'),
			'roe' => $this->input->post('roe'),
			'dar' => $this->input->post('dar'),
			'der' => $this->input->post('der'),
			'pbv' => $this->input->post('pbv'),
			'id_user' => $this->session->userdata('data_user')['id']
		]);
		if ($save) {
			$this->session->set_flashdata('success','Data Inserted');	
			redirect('admin/data/insert');
		} else {
			$this->session->set_flashdata('errors','Failed to add data');	
			redirect('admin/data/insert');
		}
	}

	public function update($id = null)
	{
		if (!$id) {
			echo "<script>alert('Id Can\'t be null')</script>";
			redirect('admin/data/view');
		}
		$tobinsq = Tobinsq::find($id);
		$this->form_validation->set_rules('kode', 'Full Name','required');
		$this->form_validation->set_rules('closing_price', 'Closing Price','required|numeric');
		$this->form_validation->set_rules('list_share', 'List Share','required|numeric');
		$this->form_validation->set_rules('debt', 'Debt','required|numeric');
		$this->form_validation->set_rules('assets', 'Assets','required|numeric');
		$this->form_validation->set_rules('piutang', 'piutang','required|numeric');
		$this->form_validation->set_rules('hutang', 'hutang','required|numeric');
		$this->form_validation->set_rules('modal', 'modal','required|numeric');
		$this->form_validation->set_rules('pendapatan', 'pendapatan','required|numeric');
		$this->form_validation->set_rules('eps', 'eps','required|numeric');
		$this->form_validation->set_rules('roa', 'roa','required|decimal');
		$this->form_validation->set_rules('roe', 'roe','required|decimal');
		$this->form_validation->set_rules('dar', 'dar','required|decimal');
		$this->form_validation->set_rules('der', 'der','required|decimal');
		$this->form_validation->set_rules('pbv', 'pbv','required|numeric');
		if (!$this->form_validation->run()) {
			$this->session->set_flashdata('errors',validation_errors());	
			redirect('admin/edittobinsq/'.$id);
		}
		$save = $tobinsq->update([
			'kode' => $this->input->post('kode'),
			'closing_price' => $this->input->post('closing_price'),
			'list_share' => $this->input->post('list_share'),
			'debt' => $this->input->post('debt'),
			'assets' => $this->input->post('assets'),
			'piutang' => $this->input->post('piutang'),
			'hutang' => $this->input->post('hutang'),
			'modal' => $this->input->post('modal'),
			'pendapatan' => $this->input->post('pendapatan'),
			'eps' => $this->input->post('eps'),
			'roa' => $this->input->post('roa'),
			'roe' => $this->input->post('roe'),
			'dar' => $this->input->post('dar'),
			'der' => $this->input->post('der'),
			'pbv' => $this->input->post('pbv'),
			'id_user' => $this->session->userdata('data_user')['id']
		]);
		// print_r($save);
		if ($save) {
			$this->session->set_flashdata('success','Data Updated');	
			redirect('admin/edittobinsq/'.$id);
		} else {
			$this->session->set_flashdata('errors','Failed to update data');	
			redirect('admin/edittobinsq/'.$id);
		}
	}

	public function delete($id = null)
	{
		if (!$id) {
			alert('Id Can\'t be null');
			redirect('admin/data/view');
		}
		$t = Tobinsq::find($id);
		$t->delete();
		redirect('admin/data/view');
	}

	public function exportToExcel()
	{
		$data = Tobinsq::All();
		// headers for download
	    header("Content-Disposition: attachment; filename=Tobinsq.xls");
	    header("Content-Type: application/vnd.ms-excel");
		$flag = false;
		$no = 1;
	    foreach($data as $row) {
	    	// Column Name
	        if(!$flag) {
	        	echo "#\tKode\tList Share\tMarket Value\tDebt\tAssets\tPiutang\tHutang\tModal\tPendapatan\tEPS\tROA\tROE\tDAR\tDER\tTobin\'s Q\tPBV\tClosing Price\n";
            	$flag = true;
	        }
	        $tobinsq = round(($row->closing_price*$row->list_share + $row->debt) / $row->assets, 3);
			echo $no."\t$row->kode\t$row->list_share\t$row->closing_price*$row->list_share\t$row->debt\t$row->assets\t$row->piutang\t$row->hutang\t$row->modal\t$row->pendapatan\t$row->eps\t$row->roa\t$row->roe\t$row->dar\t$row->der\t$tobinsq\t$row->pbv\t$row->closing_price\n";
	    	$no++;
	    }
	    exit;   
		// $data = [
		// 	'title' => 'Tobins\'q',
		// 	'data' => Tobinsq::All()
		// ];
		// $this->load->view('admin/report', $data);	
	}

}
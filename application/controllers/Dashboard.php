<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_index');
		$this->load->view('dashboard/v_footer');
	}

	public function keluar()
	{
		$this->session->sess_destroy();
		redirect('login?alert=logout');
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
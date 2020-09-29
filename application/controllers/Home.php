<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		//ini header dan footernya sudah jadi satu di file v.index
		$this->load->view('front/v_index');
	}
	

	public function blank()
	{
		$this->load->view('front/v_maintenance');
	}

	public function layanan_pendampingan()
	{
		$this->load->view('front/v_header');
		$this->load->view('front/v_layanan_pendampingan');
		$this->load->view('front/v_footer');
	}	

	public function layanan_konsultasi()
	{
		$this->load->view('front/v_header');
		$this->load->view('front/v_layanan_konsultasi');
		$this->load->view('front/v_footer');
	}
	

	public function layanan_peminjaman()
	{
		$this->load->view('front/v_header');
		$this->load->view('front/v_layanan_peminjaman');
		$this->load->view('front/v_footer');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
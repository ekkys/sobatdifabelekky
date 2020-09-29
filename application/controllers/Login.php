<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		// $this->load->library('session');
	}



	// Login Start

	public function index()
	{
		$this->load->view('front/v_header');
		$this->load->view('front/v_login');
		$this->load->view('front/v_footer');
	}	

	public function aksi()
	{
		//validasi
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() != false) {
			
			//menangkap data username dan password dari halaman login
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$where = array(
				'pengguna_username' => $username,
				'pengguna_password' => md5($password),
				'pengguna_status' => 1 
			);

			//load model
			$this->load->model('m_data');

			//cek kesesuaian login pada table pengguna
			$cek = $this->m_data->cek_login('pengguna', $where)->num_rows();

			if ($cek > 0) {
				
				//ambil data pengguna yang melakukan login
				$data =  $this->m_data->cek_login('pengguna', $where)->row();

				//buat session jika data sesuai dan ada
				$data_session = array(
					'id' => $data->pengguna_id ,
					'username' => $data->pengguna_username,
					'level' => $data->pengguna_level,
					'status' => 'telah_login'
				);

				//menjalankan session
				$this->session->set_userdata($data_session);

				//alihkan ke dashboar pengguna
				redirect(base_url('dashboard'));

			}else{
				echo "Login Gagal";
			}
		}else{

			echo "Nothing happened";

		}

	}
	// Login End

	// CRUD front/Register
	public function register()
	{
		$this->load->view('front/v_header');
		$this->load->view('front/v_register');
		$this->load->view('front/v_footer');
	}


}
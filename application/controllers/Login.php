<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}



	// Login Start

	public function index()
	{
		$this->load->view('front/v_header');
		$this->load->view('front/v_login');
		$this->load->view('front/v_footer');
	}	

	public function login_aksi()
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


	// CRUD Register

	public function register()
	{
		$this->load->view('front/v_header');
		$this->load->view('front/v_register');
		$this->load->view('front/v_footer');
	}

	public function register_aksi()
	{

		//validasi

		$this->form_validation->set_rules('nama_lengkap', 'Nama_lengkap', 'required|trim' );
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[3]|matches[ulangi_password]');
		$this->form_validation->set_rules('ulangi_password', 'Ulangi_password', 'required|trim|matches[password]');
		$this->form_validation->set_rules('jk', 'Jk', 'required');
		$this->form_validation->set_rules('difabelornot', 'Difabelornot', 'required');
		$this->form_validation->set_rules('kategori_difabel', 'Kategori_difabel', 'required');
		$this->form_validation->set_rules('sebagai', 'Sebagai', 'required');

		if ($this->form_validation->run() ==  false) {

			$this->load->view('front/v_header');
			$this->load->view('front/v_register');
			$this->load->view('front/v_footer');

		}else{

			// echo "Data berhasil masuk";

			$nama_lengkap = $this->input->post('nama_lengkap');
			$password =  $this->input->post('password');
			$email =  $this->input->post('email');
			$username =  $this->input->post('username');
			$sebagai=  $this->input->post('sebagai'); // user/admin/relawan
			$kategori_difabel =  $this->input->post('kategori_difabel');
			$difabelornot =  $this->input->post('difabelornot');
			$jk =  $this->input->post('jk');
			
			$data  = array(
				'pengguna_nama' => $nama_lengkap,
				'pengguna_password'=> md5($password),
				'pengguna_email' => $email,
				'pengguna_username' => $username,
				'pengguna_level'=> $sebagai,
				'pengguna_status' => 1,
				'pengguna_kategori' => $kategori_difabel,
				'pengguna_difabelornot' => $difabelornot,
				'pengguna_jk' => $jk

			);

			// var_dump($data); die();

			//insert data user ke db
			$this->m_data->insert_data($data, 'pengguna');

			redirect('login');
		}


	}


}

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
				$this->session->set_flashdata('aktivasi_dulu', '<div class="alert alert-warning" role="alert">Silahkan melakukan aktivasi terlebih dahulu melalui akun email. </div>');
				$this->load->view('front/v_header');
				$this->load->view('front/v_login');
				$this->load->view('front/v_footer');
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

			$email = $this->input->post('email','true');

			$nama_lengkap = htmlspecialchars($this->input->post('nama_lengkap','true'));
			$password =  $this->input->post('password');
			$email =  htmlspecialchars($email);
			$username =  htmlspecialchars($this->input->post('username','true'));
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
				'pengguna_status' => 0,
				'pengguna_kategori' => $kategori_difabel,
				'pengguna_difabelornot' => $difabelornot,
				'pengguna_jk' => $jk

			);

			// siapkan token 
			$token = base64_encode(random_bytes(32));
			$user_token = [
				'token_email' => $email,
				'token_pengguna' => $token,
				'date_created' => time()
			];



			//insert data user ke db
			$this->m_data->insert_data($data, 'pengguna');
			

			//insert token
			$this->m_data->insert_data($user_token, 'token');
			

			//kirim email ke user
			$this->_sendEmail($token, 'verifikasi');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Selamat pendaftaran akun anda sukses! Silahkan cek inbox email yang anda daftarkan untuk melakukan aktivasi akun. Bila tidak ada silahkan cek di spam. </div>');

			redirect('login');
		}


	}

	private function _sendEmail($token, $type)
	{
		$config = [  
			'protokol'	=> 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'sobatdifabel99@gmail.com',
			'smtp_pass' => '7654321@',
			'smtp_port' => 587,
			'mailtype'  => 'html',
			'charset'	=> 'utf-8',
			'newline'   => "\r\n" ,
			
		];

		$this->load->library('email',$config);
		$this->email->initialize($config);

		$this->email->from('sobatdifabel99@gmail.com', 'SobatDifabel.com');
		$this->email->to($this->input->post('email'));
		if ($type == 'verifikasi') {
			$this->email->subject('Verivikasi Akun');
			$this->email->message('Klik link berikut untuk memverifikasi akun anda: <a href="'.base_url().'login/verifikasi?email='.$this->input->post('email').'&token='.$token.'">Aktivasi</a>');
		}
		
		if ($this->email->send()) {
			return true;
		}else{
			echo $this->email->print_debugger();
			die();
		}
	}

	public function verifikasi()
	{
		//ambil email dan token dari link aktivasi
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		//cek email dan token ada/tidak di db
		$user_email = $this->db->get_where('pengguna',['pengguna_email' => $email])->row_array();

		if ($user_email) {
			//jika email benar

			$user_token = $this->db->get_where('token',['token_pengguna'=> $token])->row_array();
			if ($user_token) {
				//jika token benar
				if (time() - $user_token['date_created'] < (60*60*24)) {
					
					#update pengguna status = 1
					$this->db->set('pengguna_status',1);
					$this->db->where('pengguna_email',$email);
					$this->db->update('pengguna');

					#hapus token
					$this->db->delete('token',['token_email'=>$email]);

					//Alihkan kehalaman login
					$this->session->set_flashdata('aktivasi_dulu', '<div class="alert alert-success" role="alert">'.$email.' sudah diaktivasi silahkan login.</div>');
					$this->load->view('front/v_header');
					$this->load->view('front/v_login');
					$this->load->view('front/v_footer');
				}else{

					$this->db->delete('pengguna',['pengguna_email'=>$email]);
					$this->db->delete('token',['token_email'=>$email]);

				//jika token kedaluwarsa sudah lebih dari 24 jam
					$this->session->set_flashdata('aktivasi_dulu', '<div class="alert alert-danger" role="alert">Aktivasi gagal! Token kedaluwarsa. </div>');
					$this->load->view('front/v_header');
					$this->load->view('front/v_login');
					$this->load->view('front/v_footer');
				}

			}else{
				//jika token salah
				$this->session->set_flashdata('aktivasi_dulu', '<div class="alert alert-danger" role="alert">Aktivasi gagal! Token tidak valid. </div>');
				$this->load->view('front/v_header');
				$this->load->view('front/v_login');
				$this->load->view('front/v_footer');
			}

		}else{
			// jika email salah
			$this->session->set_flashdata('aktivasi_dulu', '<div class="alert alert-danger" role="alert">Aktivasi gagal! Email salah. </div>');
			$this->load->view('front/v_header');
			$this->load->view('front/v_login');
			$this->load->view('front/v_footer');
		}
	}

}
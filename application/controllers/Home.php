<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		// session_start();
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');

		$this->load->model('m_data');

	}

    public function index()
	{
		$this->load->view('frontend/v_index'); 
	}
	public function masuk()
	{
		$this->load->view('frontend/v_masuk');
	}

	public function masuk_act()
	{

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() != false){

			// menangkap data username dan password dari halaman login
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$where = array(
				'customer_email' => $username,
				'customer_password' => md5($password)
			);

			$this->load->model('m_data');

			// cek kesesuaian login pada table customer
			$cek = $this->m_data->cek_login('customer',$where)->num_rows();

			// cek jika login benar
			if($cek > 0){

				// ambil data customer yang melakukan login
				$data = $this->m_data->cek_login('customer',$where)->row();

				// buat session untuk customer yang berhasil login
				$data_session = array(
					'id' => $data->customer_id,
					'username' => $data->customer_email,
					'status' => "telah_login"
				);
				$this->session->set_userdata($data_session);

				// alihkan halaman ke halaman customer

				redirect(base_url().'home/customer');
			}else{
				redirect(base_url().'login');
			}

		}else{
			$this->load->view('v_login');
			
		}
	}

	public function customer()
	{
		$this->load->view('frontend/v_customer');
	}

	public function keluar()
	{
		$this->session->sess_destroy();
		redirect(base_url().'home');
	}

	public function daftar()
	{
		$this->load->view('frontend/v_daftar');
	}
	
	public function daftaraksi()
	{
		$nama  = $this->input->post('nama');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$hp = $this->input->post('hp');
		$ttl = $this->input->post('ttl');
		$tglrsp = $this->input->post('tglrsp');
		$alamatrsp = $this->input->post('alamatrsp');
		$kota = $this->input->post('kota');
		$paket = $this->input->post('paket');
		// echo $email;
		$cek_email = $this->db->query("select * from customer where customer_email='$email'");
		if($cek_email->num_rows() > 0){
			redirect(base_url().'home/daftar?alert=duplikat');
		}else{
			$data = array(
				'customer_nama' => $nama,
				'customer_email' => $email,
				'customer_hp' => $hp,
				'customer_ttl' => $ttl,
				'customer_tglrsp' => $tglrsp,
				'customer_alamatrsp' => $alamatrsp,
				'customer_alamat' => $alamat,
				'customer_kota' => $kota,
				'customer_paket' => $paket,
			);
			$this->m_data->insert_data($data,'customer');
			redirect(base_url().'home/daftarberhasil?alert=menunggukonfirmasi');
		}
	}
	public function daftarberhasil()
	{
		$this->load->view('frontend/v_daftarberhasil');
	}
}


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('m_data');

		// maka halaman akan di alihkan kembali ke halaman login.
		if($this->session->userdata('status')=="telah_login"){
			redirect(base_url('home/customer'));
		}
		
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
		// menangkap data yang dikirim dari form
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));

		$login = $this->db->query("SELECT * FROM customer WHERE customer_email='$email' AND customer_password='$password'");
		$cek = $login->num_rows();
		
		if($cek > 0){
			$data = $login->row();
		
			// hapus session yg lain, agar tidak bentrok dengan session customer
			unset($_SESSION['id']);
			unset($_SESSION['nama']);
			unset($_SESSION['username']);
			unset($_SESSION['status']);
		
			// buat session customer
			$_SESSION['customer_id'] = $data->customer_id;
			$_SESSION['customer_status'] = "login";
			redirect(base_url()."home/customer");
		}else{
			redirect(base_url()."login/cust?alert=gagal");
		}
	}

	public function customer()
	{
		$data['customer'] = $this->m_data->get_data('customer')->result();
		$this->load->view('frontend/v_header');
		$this->load->view('frontend/v_customer',$data);
		$this->load->view('frontend/v_footer');
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
		$this->load->model('m_data');

		$nama  = $this->input->post('nama');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$hp = $this->input->post('hp');
		$password = $this->input->post('password');
		$tglrsp = $this->input->post('tglrsp');
		$alamatrsp = $this->input->post('alamatrsp');
		$kota = $this->input->post('kota');
		$paket = $this->input->post('paket');
		$foto = $_FILES["foto"] ["tmp_name"];

		$path = "img/bukti_bayar/";
		$imagePath = $path . $email. "_bukti.jpg";
		move_uploaded_file($foto, $imagePath);
		// echo $email;
		$cek_email = $this->db->query("select * from customer where customer_email='$email'");
		if($cek_email->num_rows() > 0){
			redirect(base_url().'home/daftar?alert=duplikat'); 
		}else{
			$data = array(
				'customer_nama' => $nama,
				'customer_email' => $email,
				'customer_hp' => $hp,
				'customer_password' => $password,
				'customer_tglrsp' => $tglrsp,
				'customer_alamatrsp' => $alamatrsp,
				'customer_alamat' => $alamat,
				'customer_kota' => $kota,
				'customer_paket' => $paket,
				'customer_bukti' => $imagePath,
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


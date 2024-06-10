<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('m_data');

		// maka halaman akan di alihkan kembali ke halaman login.
		if($this->session->userdata('status')=="login"){
			redirect(base_url('home/customer'));
		}
		
	}

    public function index()
	{
		$this->load->view('frontend/v_index'); 
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
		redirect(base_url().'login/cust');
	}

	public function daftar()
	{
		$data['produk'] = $this->m_data->get_data('produk')->result();
		$this->load->view('frontend/v_daftar', $data);
	}
	
	public function daftaraksi()
	{
		$this->load->model('m_data');

		$nama  = $this->input->post('nama');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$hp = $this->input->post('hp');
		$tglrsp = $this->input->post('tglrsp');
		$lokasirsp = $this->input->post('lokasirsp');
		$kota = $this->input->post('kota');
		$paket = $this->input->post('paket');
		$ttl = $this->input->post('ttl'); 
		$status = $this->input->post('status');
		$foto = $_FILES["foto"] ["tmp_name"];

		$path = "img/bukti_bayar/";
		$imagePath = $path . $email. "_bukti.jpg";
		move_uploaded_file($foto, $imagePath);
		// echo $email;
		$cek_email = $this->db->query("select * from customer where customer_email='$email'");
		$cek_tanggal= $this->db->query("select * from customer where customer_tglrsp='$tglrsp'");
		if($cek_email->num_rows() > 0){
			redirect(base_url().'home/daftar?alert=duplikat'); 
		}elseif($cek_tanggal->num_rows() > 0){
			redirect(base_url().'home/daftar?alert=tanggalpenuh'); 
		}else{
			$data = array(
				'customer_nama' => $nama,
				'customer_email' => $email,
				'customer_hp' => $hp,
				'customer_tglrsp' => $tglrsp,
				'customer_lokasirsp' => $lokasirsp,
				'customer_alamat' => $alamat,
				'customer_kota' => $kota,
				'customer_paket' => $paket,
				'customer_ttl' => $ttl,
				'customer_status' => $status,
				'customer_bukti' => $imagePath,
			);
			$this->m_data->insert_data($data,'customer');
			
			$where = array(
				'customer_email' => $email,
			);
			$data['customer'] = $this->m_data->edit_data($where,'customer')->result();
			$id = $this->db->query("SELECT customer_id FROM customer where customer_email='$email'");
			$i = $id->row();
			$customerid = $i->customer_id;
			$data = array(
				'customer_id' => $customerid,
			);
			$this->m_data->insert_data($data,'detailpembayaran');
			redirect(base_url().'home/daftar?alert=menunggukonfirmasi');
		}

		$this->m_data->insert_data($data,'detailpembayaran');
	}

	public function pesanan()
	{
		$data['customer'] = $this->m_data->get_data('customer')->result();
		$data['produk'] = $this->m_data->get_data('produk')->result();
		$data['detailpembayaran'] = $this->m_data->get_data('detailpembayaran')->result();
		$this->load->view('frontend/v_header');
		$this->load->view('frontend/v_pesanan',$data);
		$this->load->view('frontend/v_footer');
	}

	public function pembayaran($id)
	{
		$where = array(
			'customer_id' => $id
		);

		$data['customer'] = $this->m_data->edit_data($where,'customer')->result();
		$data['produk'] = $this->m_data->get_data('produk')->result();
		$data['pembayaran'] = $this->m_data->edit_data($where,'pembayaran')->result();
		$data['detailpembayaran'] = $this->m_data->edit_data($where,'detailpembayaran')->result();
		$this->load->view('frontend/v_header');
		$this->load->view('frontend/v_pembayaran',$data);
		$this->load->view('frontend/v_footer');

	}

	public function pembayaranaksi()
	{
		$this->load->model('m_data');

		$jenisbayar = $this->input->post('jenisbayar');
		$nominal = $this->input->post('nominal');
		$customerid = $this->input->post('id');
		$status = $this->input->post('status');
		$foto = $_FILES["foto"] ["tmp_name"];

		$path = "img/bukti_transaksi/";
		$imagePath = $path .$jenisbayar. $customerid. "_bukti.jpg";
		move_uploaded_file($foto, $imagePath);

		$data = array(
			'jenis_bayar' => $jenisbayar,
			'customer_id' => $customerid,
			'nominal_bayar' => $nominal,
			'status_bayar' => $status,
			'bukti_bayar' => $imagePath,
		);
		$this->m_data->insert_data($data,'pembayaran');

		redirect(base_url().'home/pembayaran/'.$customerid);
	}
	public function totalbayar()
	{
		$this->load->model('m_data');

		$total  = $this->input->post('total');
		$id  = $this->input->post('id');
		$where = array(
			'customer_id' => $id
		);
		
		$data = array(
			'total' => $total,
		);
		$this->m_data->update_data($where,$data,'detailpembayaran');
		$this->load->view('frontend/v_header');
		$this->load->view('frontend/v_pesanan',$data);
		$this->load->view('frontend/v_footer');

	}

}


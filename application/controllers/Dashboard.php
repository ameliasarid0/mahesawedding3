<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		date_default_timezone_set('Asia/Jakarta');

		$this->load->model('m_data');
		$this->load->helper('artikel');

		// cek session yang login, 
		// jika session status tidak sama dengan session telah_login, berarti admin belum login
		// maka halaman akan di alihkan kembali ke halaman login.
		if($this->session->userdata('status')!="telah_login"){
			redirect(base_url().'Login');
		}
	}

	public function index()
	{
		$data['jumlah_customer'] = $this->m_data->get_data('customer')->num_rows();
		$data['jumlah_admin'] = $this->m_data->get_data('admin')->num_rows();
		$data['jumlah_invoice'] = $this->m_data->get_data('invoice')->num_rows();
		$data['jumlah_paket'] = $this->m_data->get_data('produk')->num_rows();
		$this->load->view('dashboard/v_header',$data);
		$this->load->view('dashboard/v_index',$data);
		$this->load->view('dashboard/v_footer',$data);
	}


	public function keluar()
	{
		$this->session->sess_destroy();
		redirect(base_url().'login');
	}

	public function ganti_password()
	{
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_ganti_password');
		$this->load->view('dashboard/v_footer');
	}

	public function ganti_password_aksi()
	{

		// form validasi
		$this->form_validation->set_rules('password_lama','Password Lama','required');
		$this->form_validation->set_rules('password_baru','Password Baru','required|min_length[8]');
		$this->form_validation->set_rules('konfirmasi_password','Konfirmasi Password Baru','required|matches[password_baru]');

		// cek validasi
		if($this->form_validation->run() != false){

			// menangkap data dari form
			$password_lama = $this->input->post('password_lama');
			$password_baru = $this->input->post('password_baru');
			$konfirmasi_password = $this->input->post('konfirmasi_password');

			// cek kesesuaian password lama dengan id admin yang sedang login dan password lama
			$where = array(
				'admin_id' => $this->session->userdata('id'),
				'admin_password' => md5($password_lama)
			);
			$cek = $this->m_data->cek_login('admin', $where)->num_rows();

			// cek kesesuaikan password lama
			if($cek > 0){

				// update data password admin
				$w = array(
					'admin_id' => $this->session->userdata('id')
				);
				$data = array(
					'admin_password' => md5($password_baru)
				);
				$this->m_data->update_data($where, $data, 'admin');

				// alihkan halaman kembali ke halaman ganti password
				redirect('dashboard/ganti_password?alert=sukses');
			}else{
				// alihkan halaman kembali ke halaman ganti password
				redirect('dashboard/ganti_password?alert=gagal');
			}

		}else{
			$this->load->view('dashboard/v_header');
			$this->load->view('dashboard/v_ganti_password');
			$this->load->view('dashboard/v_footer');
		}

	}

	// CRUD CUSTOMER
	public function customer()
	{
		$data['customer'] = $this->m_data->get_data('customer')->result();
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_customer',$data);
		$this->load->view('dashboard/v_footer');
	}

	public function customer_tambah()
	{
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_customer_tambah');
		$this->load->view('dashboard/v_footer');
	}

	public function customer_aksi()
	{
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('hp','hp','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('password','password','required');

		if($this->form_validation->run() != false){

			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$hp = $this->input->post('hp');
			$alamat = $this->input->post('alamat');
			$password = $this->input->post('password');
			$alamatrsp = $this->input->post('alamatrsp');
			$kota = $this->input->post('kota');
			$paket= $this->input->post('paket');

			$data = array(
				'customer_nama' => $nama,
				'customer_email' => $email,
				'customer_hp' => $hp,
				'customer_alamat' => $alamat,
				'customer_password' => md5($password),
				'customer_alamatrsp' => $alamatrsp,
				'customer_kota' => $kota,
				'customer_paket' => $paket,
			);

			$this->m_data->insert_data($data,'customer');

			redirect(base_url().'dashboard/customer');
			
		}else{
			$this->load->view('dashboard/v_header');
			$this->load->view('dashboard/v_customer_tambah');
			$this->load->view('dashboard/v_footer');
		}
	}

	public function customer_edit($id)
	{
		$where = array(
			'customer_id' => $id
		);
		$data['customer'] = $this->m_data->edit_data($where,'customer')->result();
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_customer_edit',$data);
		$this->load->view('dashboard/v_footer');
	}

	public function customer_update()
	{
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('hp','hp','required');
		$this->form_validation->set_rules('alamat','alamat','required');

		if($this->form_validation->run() != false){

			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$hp = $this->input->post('hp');
			$alamat = $this->input->post('alamat');
			$password = $this->input->post('password');
			$alamatrsp = $this->input->post('alamatrsp');
			$kota = $this->input->post('kota');
			$paket= $this->input->post('paket');

			$where = array(
				'customer_id' => $id
			);

			$data = array(
				'customer_nama' => $nama,
				'customer_email' => $email,
				'customer_hp' => $hp,
				'customer_alamat' => $alamat,
				'customer_password' => md5($password),
				'customer_alamatrsp' => $alamatrsp,
				'customer_kota' => $kota,
				'customer_paket' => $paket,
			);

			$this->m_data->update_data($where, $data,'customer');

			redirect(base_url().'dashboard/customer');
			
		}else{

			$id = $this->input->post('id');
			$where = array(
				'customer_id' => $id
			);
			$data['customer'] = $this->m_data->edit_data($where,'customer')->result();
			$this->load->view('dashboard/v_header');
			$this->load->view('dashboard/v_customer_edit',$data);
			$this->load->view('dashboard/v_footer');
		}
	}


	public function customer_hapus($id)
	{
		$where = array(
			'customer_id' => $id
		);

		$this->m_data->delete_data($where,'customer');

		redirect(base_url().'dashboard/customer');
	}
	// END CRUD CUSTOMER



	// CRUD ARTIKEL
	public function paket()
	{
		$data['produk'] = $this->m_data->get_data('produk')->result();	
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_paket',$data);
		$this->load->view('dashboard/v_footer');
	}

	public function paket_tambah()
	{
		$data['produk'] = $this->m_data->get_data('produk')->result();
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_paket_tambah',$data);
		$this->load->view('dashboard/v_footer');
	}

	public function paket_aksi()
	{
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('harga','harga','required');
		$this->form_validation->set_rules('keterangan','keterangan','required');

		if($this->form_validation->run() != false){
			$nama = $this->input->post('nama');
			$harga = $this->input->post('harga');
			$keterangan = $this->input->post('keterangan');
			$foto_paket = $_FILES["foto"] ["tmp_name"];

			$path = "/img/paket_produk/";
			$imagePath = $path . $nama. "_gambar.jpg";
			move_uploaded_file($foto_paket, $imagePath);

			$data = array(
				'produk_nama' => $nama,
				'produk_harga' => $harga,
				'produk_keterangan' => $keterangan,
				'produk_foto' => $imagePath,
			);

			$this->m_data->insert_data($data,'produk');

			redirect(base_url().'dashboard/paket');	

		}else{
			$data['produk'] = $this->m_data->get_data('produk')->result();
			$this->load->view('dashboard/v_header');
			$this->load->view('dashboard/v_paket_tambah',$data);
			$this->load->view('dashboard/v_footer');
		}
	}


	public function paket_edit($id)
	{
		$where = array(
			'produk_id' => $id
		);
		$data['produk'] = $this->m_data->edit_data($where,'produk')->result();
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_paket_edit',$data);
		$this->load->view('dashboard/v_footer');
	}


	public function paket_update()
	{
		// Wajib isi judul,konten dan kategori
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('harga','harga','required');
		$this->form_validation->set_rules('keterangan','keterangan','required');

		if($this->form_validation->run() != false){

			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$harga = $this->input->post('harga');
			$keterangan = $this->input->post('keterangan');
			$foto_paket = $_FILES["foto"] ["tmp_name"];

			$path = "img/paket_produk/";
			$imagePath = $path . $nama. "_gambar.jpg";
			move_uploaded_file($foto_paket, $imagePath);

			$where = array(
				'produk_id' => $id
			);

			$data = array(
				'produk_nama' => $nama,
				'produk_harga' => $harga,
				'produk_keterangan' => $keterangan,
				'produk_foto' => $imagePath,
			);

			$this->m_data->update_data($where,$data,'produk');

			redirect(base_url().'dashboard/paket');

		}else{
			$id = $this->input->post('id');
			$where = array(
				'produk_id' => $id
			);
			$data['produk'] = $this->m_data->edit_data($where,'produk')->result();
			$this->load->view('dashboard/v_header');
			$this->load->view('dashboard/v_paket_edit',$data);
			$this->load->view('dashboard/v_footer');
		}
	}

	public function paket_hapus($id)
	{
		$where = array(
			'produk_id' => $id
		);

		$produk = $this->m_data->edit_data($where,'produk')->row();
		
		@chmod('./gambar/produk/'.$produk->produk_foto1, 0777);
		@unlink('./gambar/produk/'.$produk->produk_foto1);

		@chmod('./gambar/produk/'.$produk->produk_foto2, 0777);
		@unlink('./gambar/produk/'.$produk->produk_foto2);

		@chmod('./gambar/produk/'.$produk->produk_foto3, 0777);
		@unlink('./gambar/produk/'.$produk->produk_foto3);

		$this->m_data->delete_data($where,'produk');
		redirect(base_url().'dashboard/paket');
	}
	// end crud paket


	// CRUD transaksi
	public function transaksi()
	{
		$data['transaksi'] = $this->db->query('select * from invoice,customer where customer_id=invoice_customer order by invoice_id desc')->result();
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_transaksi',$data);
		$this->load->view('dashboard/v_footer');
	}

	public function transaksi_invoice($id_invoice)
	{
		$data['invoice'] = $this->db->query("select * from invoice where invoice_id='$id_invoice' order by invoice_id desc")->result();

		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_transaksi_invoice',$data);
		$this->load->view('dashboard/v_footer');
	}

	public function transaksi_invoice_cetak($id_invoice)
	{
		$data['invoice'] = $this->db->query("select * from invoice where invoice_id='$id_invoice' order by invoice_id desc")->result();

		$this->load->view('dashboard/v_transaksi_invoice_cetak',$data);
	}



	public function transaksi_status()
	{
		$invoice  = $this->input->post('invoice');
		$status  = $this->input->post('status');
		$where = array(
			'invoice_id' => $invoice
		);
		$data = array(
			'invoice_status' => $status
		);
		$this->m_data->update_data($where,$data,'invoice');
		redirect(base_url().'dashboard/transaksi');
	}


	public function transaksi_hapus($id)
	{

		$lama = $this->db->query("select * from invoice where invoice_id='$id'");
		$l = $lama->row();
		$foto = $l->invoice_bukti;

		@chmod('./gambar/bukti_pembayaran/'.$foto, 0777);
		@unlink('./gambar/bukti_pembayaran/'.$foto);

		$where = array(
			'invoice_id' => $id
		);

		$this->m_data->delete_data($where,'invoice');

		$where = array(
			'transaksi_invoice' => $id
		);

		$this->m_data->delete_data($where,'transaksi');

		redirect(base_url().'dashboard/transaksi');
	}
	// END CRUD transaksi






	public function laporan()
	{

		if(isset($_GET['tanggal_sampai']) && isset($_GET['tanggal_dari'])){

			$tgl_dari = $_GET['tanggal_dari'];
			$tgl_sampai = $_GET['tanggal_sampai'];
			$data['data'] = $this->db->query("SELECT * FROM invoice,customer WHERE invoice_customer=customer_id and date(invoice_tanggal) >= '$tgl_dari' AND date(invoice_tanggal) <= '$tgl_sampai'")->result();
			$this->load->view('dashboard/v_header');
			$this->load->view('dashboard/v_laporan',$data);
			$this->load->view('dashboard/v_footer');
		}else{
			$this->load->view('dashboard/v_header');
			$this->load->view('dashboard/v_laporan');
			$this->load->view('dashboard/v_footer');
		}

	}

	public function laporan_print()
	{

		if(isset($_GET['tanggal_sampai']) && isset($_GET['tanggal_dari'])){

			$tgl_dari = $_GET['tanggal_dari'];
			$tgl_sampai = $_GET['tanggal_sampai'];
			$data['data'] = $this->db->query("SELECT * FROM invoice,customer WHERE invoice_customer=customer_id and date(invoice_tanggal) >= '$tgl_dari' AND date(invoice_tanggal) <= '$tgl_sampai'")->result();
			$this->load->view('dashboard/v_laporan_print',$data);
		}else{
			$this->load->view('dashboard/v_laporan_print');
		}

	}


	public function laporan_pdf()
	{

		if(isset($_GET['tanggal_sampai']) && isset($_GET['tanggal_dari'])){
			$tgl_dari = $_GET['tanggal_dari'];
			$tgl_sampai = $_GET['tanggal_sampai'];

			$this->load->library('pdfgenerator');
			$data['title_pdf'] = 'Laporan Penjualan';
			$file_pdf = 'laporan_penjualan';
			$paper = 'A4';
			$orientation = "landscape";
			$data['data'] = $this->db->query("SELECT * FROM invoice,customer WHERE invoice_customer=customer_id and date(invoice_tanggal) >= '$tgl_dari' AND date(invoice_tanggal) <= '$tgl_sampai'")->result();
			$html = $this->load->view('dashboard/v_laporan_pdf',$data, true);	
			$this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
		}
	}




	// CRUD admin
	public function admin()
	{
		$data['admin'] = $this->m_data->get_data('admin')->result();	
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_admin',$data);
		$this->load->view('dashboard/v_footer');
	}

	public function admin_tambah()
	{
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_admin_tambah');
		$this->load->view('dashboard/v_footer');
	}

	public function admin_aksi()
	{
		// Wajib isi
		$this->form_validation->set_rules('nama','Nama admin','required');
		$this->form_validation->set_rules('username','Username admin','required');
		$this->form_validation->set_rules('password','Password admin','required|min_length[8]');

		if($this->form_validation->run() != false){

			$config['encrypt_name'] = TRUE;
			$config['upload_path']   = '/img/foto_user/';
			$config['allowed_types'] = 'gif|jpg|png';

			$this->load->library('upload', $config);

			if($this->upload->do_upload('foto')){
				$foto = $this->upload->do_upload('foto');
				$gambar1 = $this->upload->data();
				$foto = $gambar1['file_name'];
			}else{
				$foto = "";
			}
 
			$nama = $this->input->post('nama');
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$data = array(
				'admin_nama' => $nama,
				'admin_username' => $username,
				'admin_password' => md5($password),
				'admin_foto' => $foto
			);

			$this->m_data->insert_data($data,'admin');

			redirect(base_url().'dashboard/admin');	

		}else{
			$this->load->view('dashboard/v_header');
			$this->load->view('dashboard/v_admin_tambah');
			$this->load->view('dashboard/v_footer');
		}
	}

	public function admin_edit($id)
	{
		$where = array(
			'admin_id' => $id
		);
		$data['admin'] = $this->m_data->edit_data($where,'admin')->result();
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_admin_edit',$data);
		$this->load->view('dashboard/v_footer');
	}


	public function admin_update()
	{
		// Wajib isi
		$this->form_validation->set_rules('nama','Nama admin','required');
		$this->form_validation->set_rules('username','Username admin','required');

		if($this->form_validation->run() != false){

			$config['encrypt_name'] = TRUE;
			$config['upload_path']   = './gambar/user/';
			$config['allowed_types'] = 'gif|jpg|png';

			$this->load->library('upload', $config);

			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$where = array(
				'admin_id' => $id
			);

			$detail_admin = $this->m_data->edit_data($where,'admin')->row();

			if(!empty($_FILES['foto']['name'])){

				$this->load->library('upload', $config);
				if ($this->upload->do_upload('foto')) {

					@chmod('./gambar/user/'.$detail_admin->admin_foto, 0777);
					@unlink('./gambar/user/'.$detail_admin->admin_foto);

					$gambar = $this->upload->data();
					$data = array(
						'admin_foto' => $gambar['file_name'],
					);
					$this->m_data->update_data($where,$data,'admin');
				}
			}

			if($this->input->post('password') == ""){
				$data = array(
					'admin_nama' => $nama,
					'admin_username' => $username
				);
			}else{
				$data = array(
					'admin_nama' => $nama,
					'admin_username' => $username,
					'admin_password' => $password
				);
			}


			$this->m_data->update_data($where,$data,'admin');

			redirect(base_url().'dashboard/admin');
		}else{
			$id = $this->input->post('id');
			$where = array(
				'admin_id' => $id
			);
			$data['admin'] = $this->m_data->edit_data($where,'admin')->result();
			$this->load->view('dashboard/v_header');
			$this->load->view('dashboard/v_admin_edit',$data);
			$this->load->view('dashboard/v_footer');
		}
	}

	public function admin_hapus($id)
	{
		$where = array(
			'admin_id' => $id
		);

		$detail_admin = $this->m_data->edit_data($where,'admin')->row();

		@chmod('./gambar/user/'.$detail_admin->admin_foto, 0777);
		@unlink('./gambar/user/'.$detail_admin->admin_foto);

		$this->m_data->delete_data($where,'admin');

		redirect(base_url().'dashboard/admin');
	}
	// end crud admin

}

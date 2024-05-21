<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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


}


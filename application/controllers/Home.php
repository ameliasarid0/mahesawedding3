<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index()
	{
		$this->load->view('halaman_utama'); 
	}
	public function login()
	{
		redirect(base_url('/login'));
	}
}


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index()
	{
		$this->load->view('v_login'); 
	}

	public function simpan()
	{
		$data = array(
			'nim' =>$this->input->post('txtnim'),
			'nama' =>$this->input->post('txtnama'),
			'jk' =>$this->input->post('gender'),
			'alamat' =>$this->input->post('txtalamat'),

		);
		$this->load->model('M_siswa');
		$this->M_siswa->create($data); 
		redirect(base_url());
	}

	public function tambah()
	{
		$this->load->view('form_tambah_siswa');
	}
	
	public function panggil_siswa($nim)
	{
		//menuju ke model
		$this->load->model('M_siswa');
		$row=$this->M_siswa->get_by_nim($nim);
		//menuju view
		$data['tampil']=$this->M_siswa->get_by_nim($nim);
		if ($row) {
			$this->load->view('form_edit_siswa', $data);
		} else {
			redirect(base_url());
		}
		
	}

	public function update($nim)
	{
		$data = array(
			'nim' =>$this->input->post('txtnim'),
			'nama' =>$this->input->post('txtnama'),
			'jk' =>$this->input->post('gender'),
			'alamat' =>$this->input->post('txtalamat'),

		);
		$this->load->model('M_siswa');
		$this->M_siswa->update($nim,$data); 
		redirect(base_url());
	}

	public function delete($nim)
	{
		$this->load->model('M_siswa');
		$this->M_siswa->delete($nim); 
		redirect(base_url());
	}

}


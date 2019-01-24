<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');
	}

	public function index()
	{
		$query 	= $this->Mahasiswa_model->get_all();
		$jurusan = array('Teknik Informatika','Teknik Mesin','Teknik Elektro'); 
		$data 	= array(	'title' 	=> 'Mahasiswa',
							'isi'		=> 'templates/list',
							'jurusan'	=> $jurusan,
							'get_all'	=> $query			
		);
		$this->load->view('layout/wrapper', $data);
	}

	public function add()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tbl_mahasiswa.email]',array(
					'is_unique' => "Email sudah ada."
		));
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() === FALSE) {
			$query 	= $this->Mahasiswa_model->get_all();
			$jurusan = array('Teknik Informatika','Teknik Mesin','Teknik Elektro'); 
			$data 	= array(	'title' 	=> 'Mahasiswa',
								'isi'		=> 'templates/list',
								'jurusan'	=> $jurusan,
								'get_all'	=> $query			
			);
			$this->load->view('layout/wrapper', $data);
		}else{
			$data = array(	'nama' 		=> $this->input->post('nama'),
							'email'		=> $this->input->post('email'),
							'password'	=> sha1($this->input->post('password')),
							'jurusan'	=> $this->input->post('jurusan')
			);
			$this->Mahasiswa_model->add_item($data);
			$this->session->set_flashdata('sukses', '<script>swal("Success","Data berhasil disimpan","success")</script>');
			redirect(base_url('mahasiswa'),'refresh');
		}
	}

	public function edit($id)
	{
		$this->Mahasiswa_model->detail($id);
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->session->set_flashdata('sukses', '<script>swal("Error","Data Tidak berhasil diedit","error")</script>');
			redirect(base_url('mahasiswa'),'refresh');
		}else{
			$data = array(	'id'		=> $id,
							'nama' 		=> $this->input->post('nama'),
							'email'		=> $this->input->post('email'),
							'password'	=> sha1($this->input->post('password')),
							'jurusan'	=> $this->input->post('jurusan')
			);
			$this->Mahasiswa_model->edit_item($data);
			$this->session->set_flashdata('sukses', '<script>swal("Success","Data berhasil diedit","success")</script>');
			redirect(base_url('mahasiswa'),'refresh');
		}
	}

	public function hapus($id)
	{
		$data = array('id' => $id);
		$this->Mahasiswa_model->hapus_item($data);
		$this->session->set_flashdata('sukses', '<script>swal("Success","Data telah dihapus","success")</script>');
		redirect(base_url('mahasiswa'),'refresh');
	}

}

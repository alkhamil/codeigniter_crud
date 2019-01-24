<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

	public function get_all()
	{
		$this->db->select('*');
		$this->db->from('tbl_mahasiswa');
		$query = $this->db->get();
		return $query->result();
	}

	public function detail($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_mahasiswa');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}

	public function add_item($data)
	{
		$this->db->insert('tbl_mahasiswa', $data);
	}

	public function edit_item($data)
	{
		$this->db->where('id',$data['id']);
		$this->db->update('tbl_mahasiswa',$data);
	}

	public function hapus_item($data)
	{
		$this->db->where('id',$data['id']);
		$this->db->delete('tbl_mahasiswa',$data);
	}

}

/* End of file Mahasiswa_model.php */
/* Location: ./application/models/Mahasiswa_model.php */
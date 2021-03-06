<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {

	public function cek_login($table, $where){
		return $this->db->get_where($table, $where);
	}
	
	
	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function get_data($table)
	{
		return $this->db->get($table);
	}

	public function insert_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function delete_data($where, $table)
	{
		$this->db->delete($table, $where);
	}


	//Registrasi dan Verifikasi Akun

	
}

/* End of file m_data.php */
/* Location: ./application/models/m_data.php */
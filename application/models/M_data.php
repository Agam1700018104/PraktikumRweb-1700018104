<?php

class M_data extends CI_Model
{
	// public function data_event()
	// {
	// 	$query = $this->db->query("SELECT * FROM event");
	// 	return $query->result();
	// }
	function tampil_data()
	{
<<<<<<< HEAD
		return $this->db->get('pemohon');
=======
		return $this->db->get('wisata');
>>>>>>> e2ff63977225663a468ced5de73eef6bcee3fba1
	}

	function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
}

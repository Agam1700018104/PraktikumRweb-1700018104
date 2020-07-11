<?php

class pemohon extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_data');
		// $this->load->helper('url');

		if ($this->session->userdata('login') == null) {
			redirect('login');
		}
	}

	function index()
	{
		$data['pemohon'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_pemohon', $data);
	}

	function tambah()
	{
		$this->load->view('v_input');
	}

	function tambah_aksi()
	{
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$jp = $this->input->post('jp');
		$nik = $this->input->post('nik');		

		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'jp' => $jp,
			'nik' => $nik,
		);
		$this->m_data->input_data($data, 'pemohon');
		redirect('pemohon/index');
	}

	function hapus($id)
	{
		$where = array('id' => $id);
		$this->m_data->hapus_data($where, 'pemohon');
		redirect('pemohon/index');
	}

	function edit($id)
	{
		$where = array('id' => $id);
		$data['pemohon'] = $this->m_data->edit_data($where, 'pemohon')->result();
		$this->load->view('v_edit', $data);
	}

	function update()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$jp = $this->input->post('jp');
		$nik = $this->input->post('nik');

		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'jp' => $jp,
			'nik' => $nik,
		);

		$where = array(
			'id' => $id
		);

		$this->m_data->update_data($where, $data, 'pemohon');
		redirect('pemohon/index');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	public function insertArtikel()
	{
		$object = array(
			'nama' => $this->input->post('nama'),);
		$this->db->insert('artikel',$object);
	}

/* End of file artikel_model.php */
/* Location: ./application/models/artikel_model.php */
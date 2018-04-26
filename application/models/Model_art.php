<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_art extends CI_Model {

	public function Get_artikel()
	{
		$query = $this->db->query('select * from artikel');
		return $query->result();
	}

	public function Get_single($id)
	{
		$data = array();
		$options = array('id' => $id);
		$Q = $this -> db -> get_where('artikel',$options,1);
			if ($Q->num_rows()>0) {
				$data = $Q->row_array();
			}
		$Q ->free_result();
		return $data;
	}

	// public function insertArtikel()
	// {
	// 	$object = array(
	// 		'judul' => $this->input->post('nama'),
	// 		'isi' => $this->input->post('nama'),
	// 		'tanggal' => $this->input->post('nama'),
	// 		'creator' => $this->input->post('nama'),
	// 		'foto' => $this->upload->data('file_name')
	// 	);
	// 	$this->db->insert('artikel',$object);
	// }
}

/* End of file Model_art.php */
/* Location: ./application/models/Model_art.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_art extends CI_Model {

	public function Get_artikel()
	{
		$query = $this->db->query('select * from artikel');
		return $query->result();
	}
	public function Show_category($id)
	{

		$query = $this->db->query("select * from artikel where id_kategori=" .$id);
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
}

/* End of file Model_art.php */
/* Location: ./application/models/Model_art.php */
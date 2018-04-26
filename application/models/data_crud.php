<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_crud extends CI_Model {

	function Get_crud(){
		$query = $this->db->query('select * from artikel');
		return $query->result(); // Kode ini digunakan untuk mengembalikan hasil operasi $res menjadi sebuah array
	}

	function Insert($data){
		$this->db->insert('artikel', $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
        
	}

	function hapus_data($id){

		$row = $this->db->where('id',$id)->get('artikel')->row();

		$this->db->where('id', $id);

		// $path = realpath(APPPATH . '../assert(assertion)et/image/'.$images);

		unlink('assets/img/uploads/'.$row->gambar);

		$this->db->delete('artikel', array('id' => $id));
	}

	// function Get_single($id){
	// 	$data = array();
	// 	$options = array('id' => $id);
	// 	$Q = $this -> db -> get_where('artikel',$options,1);
	// 		if($Q->num_rows()>0){
	// 			$data = $Q->row_array();
	// 		}
	// 	$Q ->free_result();
	// 	return $data; 
	// }

	function edit($where,$table){  
	 return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
	  $this->db->where($where);
	  $this->db->update($table,$data);
	 } 

	function hapus_gambar_saja($id){

		$row = $this->db->where('id',$id)->get('artikel')->row();

		$this->db->where('id', $id);

		// $path = realpath(APPPATH . '../assert(assertion)et/image/'.$images);

		unlink('assets/img/uploads/'.$row->gambar);
	}
	
	// NEW ERA
	function tampil_data(){
		return $this->db->get('artikel');
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}	
}

/* End of file data_crud.php */
/* Location: ./application/models/data_crud.php */
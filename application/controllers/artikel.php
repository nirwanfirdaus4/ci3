<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function index()
	{
		$this->load->model('artikel_model');
		$data["artikel_list"] = 
		$this->artikel_model->getDataArtikel();
		$this->load->view('artikel',$data);	
	}

	public function create()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');

		if ($this->form_validation->run()==FALSE) {
			$this->load->view('tambah_artikel_view');	
		}else{
			$this->load->view('Berhasil menambahkan artikel');
		}

		$this->artikel_model->insertArtikel();
		$this->load->view('tambah_artikel_sukses');


	}
	public function delete()
	{
		
	}

}

/* End of file artikel.php */
/* Location: ./application/controllers/artikel.php */
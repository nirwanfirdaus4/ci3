<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koneksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_art');
	}

	public function index()
	{
		$data1['qu'] = $this->Model_art->Get_artikel();
		$this->load->view('bloge', $data1);		
	}

}

/* End of file koneksi.php */
/* Location: ./application/controllers/koneksi.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model('Model_mhs');
	// }

	public function index()
	{
		// $data['mhs'] = $this->Model_mhs->getMhs();
		$this->load->view('blog');	
	}

	// public function lol()
	// {
	// 	echo "lol";
	// }

}

/* End of file cek.php */
/* Location: ./application/controllers/cek.php */
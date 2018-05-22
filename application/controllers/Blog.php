<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_art');
		$this->load->model('Data_crud');
	}

	public function index()
	{
		$data1['query'] = $this->Model_art->Get_artikel();		
		$data['kategori'] = $this->Data_crud->getKategori();	
		$this->load->view('header',$data);			
		$this->load->view('bloge',$data1);
		$this->load->view('footer');

	}

	public function detail()
	{
		$data['data'] = $this->Model_art->Get_single($this->uri->segment(3));		
		$this->load->view('header');			
		$this->load->view('detail',$data);
		$this->load->view('footer');		
	}

	public function show_category()
	{
		$id = $this->input->post('kategori');
		$data['query'] = $this->Model_art->Show_category($id);	
		$data1['kategori'] = $this->Data_crud->getKategori();
		$this->load->view('header',$data1);
		$this->load->view('bloge',$data);
		$this->load->view('footer');
	}
}

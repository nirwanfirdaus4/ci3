<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_art');
		$this->load->model('Data_crud');
		$this->load->helper('konfigurasi');	
		$this->load->library('pagination');
	}

	public function shoul()
	{
		$data['query'] = $this->Model_art->Get_artikel();		
		$data['kategori'] = $this->Data_crud->getKategori();	

		$limit_per_page = 2;
		$start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;
		$total_records = $this->Model_art->get_total('artikel');
		$data["artikel"] = $this->Model_art->get_data_pagination('artikel' , $limit_per_page, $start_index);
		 
		$config = paging_config('Blog/shoul',$total_records,$limit_per_page);
		$this->pagination->initialize($config);

		// Buat link pagination
		$data["pagination"] = $this->pagination->create_links();

		$this->load->view('header');			
		$this->load->view('bloge',$data);
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
			if ($id==1) {

				$data['query'] = $this->Model_art->Get_artikel();		
				$data['kategori'] = $this->Data_crud->getKategori();	
				$this->load->view('header');			
				$this->load->view('bloge',$data);
				$this->load->view('footer');
			}else{
				$data['query'] = $this->Model_art->Show_category($id);	
				$data['kategori'] = $this->Data_crud->getKategori();
				$this->load->view('header');
				$this->load->view('bloge',$data);
				$this->load->view('footer');		
		}
	}
	// public function books()
	// {
	// 	$limit_per_page = 4;
	// 	$start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;
	// 	$total_records = $this->Model_art->get_total('artikel');
	// 	$data["artikel"] = $this->Model_art->get_data_pagination('artikel' , $limit_per_page, $start_index);
		 
	// 	$config = paging_config('Blog/books/',$total_records,$limit_per_page);
	// 	$this->pagination->initialize($config);
			
	// 	// Buat link pagination
	// 	$data["pagination"] = $this->pagination->create_links();
	// 	// $this->load->view('header');
	// 	$this->load->view('bloge', $data);
	// 	// $this->load->view('footer');
	// }
}

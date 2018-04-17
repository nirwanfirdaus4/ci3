<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('data_crud');
		$this->gallery_path = realpath(APPPATH . '../assets/img/');
        $this->gallery_path_url = base_url() . 'assets/img/';		
	}

	public function index()
	{
		$data['query'] = $this->data_crud->Get_crud();
		$this->load->view('header');
		$this->load->view('panel', $data);
		$this->load->view('footer');		
	}

	public function tambah()
	{
		$this->load->view('header');
		$this->load->view('tambah_artikel');
		$this->load->view('footer');
	}

	public	function tambah_aksi($upload){

		$config['upload_path'] = $this->gallery_path;
	    $config['allowed_types'] = 'jpg|png|jpeg';
	    $config['max_size']  = '2048';
	    $config['remove_space'] = TRUE;

		$this->load->library('upload', $config);
		$this->upload->do_upload('gambar');

    	$data = array(
     	   	'judul' => $this->input->post('judul'),
       		'isi' => $this->input->post('isi'),
       		'creator' => $this->input->post('creator'),
        	'gambar' => $this->upload->file_name,
        	'tanggal' => date('Y-m-d')
        	 );
    	$this->data_crud->insert($data);
    	redirect('Panel');
	}

	public function hapus($id){
		$this->data_crud->hapus_data($id);
		redirect('Panel');
	}

	public function edit(){
		$data['data'] = $this->data_crud->Get_single($this->uri->segment(3));
		$this->load->view('header');
		$this->load->view('edit_artikel',$data);
		$this->load->view('footer');
	}

	public function edit_aksi(){
		$id = $this->input->post('id');

		$this->data_crud->hapus_gambar_saja($id);

		$config['upload_path'] = $this->gallery_path;
	    $config['allowed_types'] = 'jpg|png|jpeg';
	    $config['max_size']  = '2048';
	    $config['remove_space'] = TRUE;

		$this->load->library('upload', $config);
		$this->upload->do_upload('gambar');


		$data = array(
     	   	'judul' => $this->input->post('judul'),
       		'isi' => $this->input->post('isi'),
        	'gambar' => $this->upload->file_name,
        	'tanggal' => date('Y-m-d')
        	 );

		$where = array(
  			'id' => $id
 		);

 		$this->data_crud->update($where,$data,'artikel');
 		redirect('Panel');
	}



}

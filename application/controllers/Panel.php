<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('data_crud');
		$this->load->library('form_validation');		
		$this->gallery_path = realpath(APPPATH . '../assets/img/uploads/');
        $this->gallery_path_url = base_url() . 'assets/img/uploads/';		

	}

	public function index()
	{
		$data['artikel'] = $this->data_crud->tampil_data()->result();
		$this->load->view('header');
		$this->load->view('panel',$data);
		$this->load->view('footer');		
	}

	public function tambah()
	{	
		$data['kategori'] = $this->data_crud->getKategori();
		$this->load->view('header');
		$this->load->view('add_articel', $data);
		$this->load->view('footer');
	}

	public	function tambah_aksi(){
		// FROM VALIDATION
		$this->form_validation->set_rules('judul','Title','trim|required');			
		$this->form_validation->set_rules('kategori','Category','trim|required');			
		$this->form_validation->set_rules('isi','Content','trim|required');			
		$this->form_validation->set_rules('crtr','Creator','trim|required');			
		// $this->form_validation->set_rules('userfile','Picture','trim|required');			

		if ($this->form_validation->run()==FALSE) {
				$this->load->view('header');
				$this->load->view('add_articel');
				$this->load->view('footer');
		}else{
			$config['upload_path'] = $this->gallery_path;
		    $config['allowed_types'] = 'jpg|png|jpeg';
		    $config['max_size']  = '2048';
		    $config['remove_space'] = TRUE;
		
			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('userfile')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('header');
				$this->load->view('add_articel',$error);
				$this->load->view('footer');
			}else{
				$data = array('upload_data' => $this->upload->data());
		    	$data = array(
		     	   	'judul' => $this->input->post('judul'),
		     	   	'id_kategori' => $this->input->post('kategori'),
		       		'isi' => $this->input->post('isi'),
		       		'creator' => $this->input->post('crtr'),
		        	'gambar' => $this->upload->data('file_name'),
		        	'tanggal' => date('Y-m-d')
		        	 );
		    	$this->data_crud->input_data($data,'artikel');
	    	redirect('Panel');
			}
		}
		
	}
  
	public function hapus($id){
		$this->data_crud->hapus_data($id);
		redirect('Panel');
	}

	public function edit($id){
		$where = array('id' => $id);
		$data['artikel'] = $this->data_crud->edit_data($where,'artikel')->result();
		$data1['kategori'] = $this->data_crud->getKategori();
		$this->load->view('header');
		$this->load->view('edit_artikel',$data);
		$this->load->view('footer');
	}
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
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

	public function update()
	{
			$config['upload_path'] = $this->gallery_path;
		    $config['allowed_types'] = 'jpg|png|jpeg';
		    $config['max_size']  = '2048';
		    $config['remove_space'] = TRUE;
		
			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('userfile')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('header');
				$this->load->view('edit_artikel',$error);
				$this->load->view('footer');
			}else{
				$data = array('upload_data' => $this->upload->data());

    	$data = array(
    		'id' => $this->input->post('id'),
     	   	'judul' => $this->input->post('judul'),
     	   	'id_kategori' => $this->input->post('kategori'),
       		'isi' => $this->input->post('isi'),
       		'creator' => $this->input->post('crtr'),
        	// 'gambar' => $this->upload->file_name,
        	'gambar' => $this->upload->data('file_name'),        	
        	'tanggal' => date('Y-m-d')
        	 );
    	$where = array(
			'id' => $this->input->post('id')
		);
    	$this->data_crud->update_data($where,$data,'artikel');
    	redirect('Panel');
	}
}
 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}		
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
	}
 
	public function index()
	{
		$this->load->view('header1');
		$this->load->view('login');		
	}
	public function aksi_login(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cek_admin = $this->M_login->auth_admin($username,$password);

		if ($cek_admin->num_rows() > 0) {
			$data=$cek_admin->row_array();
			$this->session->set_userdata('masuk',TRUE);
			if ($data['level']==1) {
				$this->session->set_userdata('akses','1');
				$this->session->set_userdata('ses_nama',$data['username']);
				redirect(base_url("Page"));
			}else{
				$this->session->set_userdata('akses','2');					
				$this->session->set_userdata('ses_nama',$data['username']);
				redirect(base_url("Page"));
			}
			// echo "MASUK LEVEL 1";
		}else{
			$cek_member = $this->M_login->auth_member($username,$password);			
			if ($cek_member->num_rows() > 0) {
				$data=$cek_member->row_array();			
				$this->session->set_userdata('masuk',TRUE);
				$this->session->set_userdata('akses','3');				
				$this->session->set_userdata('ses_nama',$data['nama']);
				redirect(base_url("Page"));
			}else{
				$solve='Password salah';
				$this->load->view('header1');
				$this->load->view('login',$solve);
				// echo "SALAH";						
			}


		}

		// $username = $this->input->post('username');
		// $password = $this->input->post('password');
		// $where = array(
		// 	'username' => $username,
		// 	'password' => $password
		// 	);
		// $cek = $this->m_login->cek_login("admin",$where)->num_rows();
		// if($cek > 0){
 
		// 	$data_session = array(
		// 		'nama' => $username,
		// 		'status' => "login"
		// 		);
 
		// 	$this->session->set_userdata($data_session);
 
		// 	redirect(base_url("panel"));
 
		// }else{
		// 	$solve='Password salah';
		// 	$this->load->view('header1');
		// 	$this->load->view('login',$solve);		
		// }
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}	

}

/* End of file koneksi.php */
/* Location: ./application/controllers/koneksi.php */
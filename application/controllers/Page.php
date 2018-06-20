<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url=base_url();
			redirect($url);		
		}		
	}

	function index()
	{
		$this->load->view('v_dashboard');
	}

// AKSES ADMIN

	function admin_addParticipant()
	{
		if ($this->session->userdata('akses')=='1') {
			$this->load->view('a_addParticipant');
		}else{
			redirect(base_url("Login"));
		}
	}

	function admin_addCategory()
	{
		if ($this->session->userdata('akses')=='1') {
			$this->load->view('a_addCategory');
		}else{
			redirect(base_url("Login"));
		}
	}
	function admin_viewUploads()
	{
		if ($this->session->userdata('akses')=='1') {
			$this->load->view('a_viewUploads');
		}else{
			redirect(base_url("Login"));
		}
	}

// AKSES OWNER

	function owner_viewUploads()
	{
		if ($this->session->userdata('akses')=='2') {
			$this->load->view('o_viewUploads');
		}else{
			redirect(base_url("Login"));
		}
	}	

	function owner_viewMember()
	{
		if ($this->session->userdata('akses')=='2') {
			$this->load->view('o_viewMember');
		}else{
			redirect(base_url("Login"));
		}
	}

// AKSES MEMBER

}
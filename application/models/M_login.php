<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// class M_login extends CI_Model{	
// 	function cek_login($table,$where){		
// 		return $this->db->get_where($table,$where);
// 	}

class M_login extends CI_Model
{
	
	public function auth_admin($username,$password)
	{
		$query=$this->db->query("SELECT * FROM admin where username='$username' AND password='$password'");
		return $query;
	}

	function auth_member($username,$password)
	{
		$query=$this->db->query("SELECT * FROM member where username='$username' AND password='$password'");
		return $query;
	}


}
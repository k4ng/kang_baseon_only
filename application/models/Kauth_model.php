<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class Kauth_model extends CI_Model 
    {
	
		function check_account($access, $password)
		{
			$this->db->from("sys_users");
			$this->db->where("su_username", $access);
			$this->db->where("su_password", sha1(md5($password)));
			$query = $this->db->get();
			
			return $query;
		}

		function create_account($access)
		{
			$insert = $this->db->insert("sys_users", array(
				"su_email"	=>	$access,
				"su_status"	=>	"unverified",
				"su_role"	=>	"member"
			));

			if($insert)
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}
	}
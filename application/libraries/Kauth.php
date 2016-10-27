<?php defined('BASEPATH') OR exit('No direct script access allowed');

	/*
	* Library auth DOC CMS
	* Author : Cahya Dyazin
	*
	* 404 : not found (data tidak ada)
	* 403 : forbiden (upaya hack)
	* 100 : oke
	*/
	
	class Kauth
	{
		function check_login( $param = array() )
		{
			$CI =& get_instance();
			$CI->load->model("kauth_model","kmod");

			$access_s = $param["access"];
			$password_s = $param["password"];

			$check = $CI->kmod->check_account($access_s, $password_s);

			if($check->num_rows() == 1)
			{
				$check_arr = $check->row_array();

				switch ($check_arr['su_status']) {
					case 'active':
						$CI->session->set_userdata('isLogin', TRUE);
						$CI->session->set_userdata('data_user',$check->row());
							
						redirect($param["redirect100"]);
						break;
					
					case 'unverified':
						$CI->session->set_flashdata('fail', $access_s);
						$CI->session->set_flashdata('fail_m', "Email has not been verified, detected a robot account!");

						redirect($param["redirect404"]);
						break;

					case 'inactive':
						$CI->session->set_flashdata('fail', $access_s);
						$CI->session->set_flashdata('fail_m', "Account has been deactivated, please contact the admin to activate. Thank you.");

						redirect($param["redirect404"]);
						break;

					case 'blocked':
						$CI->session->set_flashdata('fail', $access_s);
						$CI->session->set_flashdata('fail_m', "Account has been blocked, please contact the admin to activate. Thank you.");

						redirect($param["redirect404"]);
						break;

					case 'deleted':
						$CI->session->set_flashdata('fail', $access_s);
						$CI->session->set_flashdata('fail_m', "Account has been deleted, please re-register, or contact admin to restore your account. Thank you.");

						redirect($param["redirect404"]);
						break;

					default:
						$CI->session->set_flashdata('fail', $access_s);
						$CI->session->set_flashdata('fail_m', "Username and password not match!");
						
						redirect($param["redirect404"]);
						break;
				}
			}
			else
			{
				$CI->session->set_flashdata('fail', $access_s);
				$CI->session->set_flashdata('fail_m', "Username and password not match!");
				
				redirect($param["redirect404"]);
			}
		}
		
		function check_session($status){
			$CI =& get_instance();
			if($status == "login"){
				if($CI->session->userdata('isLogin') == FALSE) {
					redirect('auth');
				}
			} else {
				if($CI->session->userdata('isLogin') == TRUE) {
					redirect('doc-dashboard/index');
				}
			}
		}

		function create_account( $param = array() )
		{
			$CI =& get_instance();
			$CI->load->model("kauth_model","kmod");

			$access_s = $param["access"];

			$create = $CI->kmod->create_account($access_s);
			print_r($create);
			if($create == TRUE)
			{
				$data['fake'] = '';
				$CI->load->library('kmail');
				$CI->kmail->smtp_basic(array(
					"to"		=> $access_s,
					"subject"	=> "Confirmation email register",
					"body"		=> $CI->load->view('email-template/verify-email', $data, TRUE)
				));
				$CI->session->set_flashdata('regsuccess_permission', "ALLOW");
				$CI->session->set_flashdata('regsuccess_email', $access_s);
				redirect($param["redirect100"]);
			}
			else
			{
				$CI->session->set_flashdata('fail', $access_s);
				$CI->session->set_flashdata('fail_m', "Username dan katasandi tidak cocok!");
				redirect($param["redirect404"]);
			}
		}
	}
?>










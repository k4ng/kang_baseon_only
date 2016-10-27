<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Auth extends KANG_Controller {

        public function __construct() 
        {
            parent::__construct();
            $this->load->helper('captcha');
        }

        public function index()
        {
        	$data["header"] = $this->render_html('header', array(), FALSE);
        	$data["footer"] = $this->render_html('footer');
        	
			$this->load->view('auth/page-login', $data);
        }

        public function verify()
        {
        	$post = $this->input->post();

        	$this->kauth->check_login( array(
        		"access" 		=> $post["access"],
        		"password" 		=> $post["password"],
        		"redirect100" 	=> "main/dashboard",
        		"redirect404" 	=> "auth"
	        ) );
        }

        public function create_account()
        {
        	$digit1 = mt_rand(1,100);
		    $digit2 = mt_rand(1,100);

		    $operator = mt_rand(0,2);
		    switch ($operator) {
		    	case 0:
		    		$math = $digit1 - $digit2;
		        	$data['math'] = "$digit1 - $digit2";
		    		break;

		    	case 1:
		    		$math = $digit1 * $digit2;
		        	$data['math'] = "$digit1 x $digit2";
		    		break;
		    	
		    	default:
		    		$math = $digit1 + $digit2;
		        	$data['math'] = "$digit1 + $digit2";
		    		break;
		    }

			$this->session->set_userdata('math_captcha', $math);

        	$data["header"] = $this->render_html('header', array(), FALSE);
        	$data["footer"] = $this->render_html('footer');
        	
			$this->load->view('auth/page-register', $data);
        }

        public function process()
        {
        	$post = $this->input->post();
        	if($post['answer'] == $this->session->userdata('math_captcha'))
        	{
        		$this->kauth->create_account( array(
        			"access"		=> $post['access'],
        			"redirect100"	=> "auth/create_account_success",
        			"redirect404"	=> "auth/create_account"
        		) );
        	}
        	else
        	{
        		$this->session->set_flashdata("fail", $post['access']);
        		$this->session->set_flashdata("fail_m", "the answer is not ".$post['answer'].". try again! ");

        		redirect('auth/create_account');
        	}
        }

        public function create_account_success()
        {
        	if($this->session->flashdata('regsuccess_permission') != "ALLOW")
        	{
        		redirect('auth/create_account');
        	}

        	$data["header"] = $this->render_html('header', array(), FALSE);
        	$data["footer"] = $this->render_html('footer');

			$this->load->view('auth/page-register-success', $data);
        }

        public function recover_password()
        {

        	$data["header"] = $this->render_html('header', array(), FALSE);
        	$data["footer"] = $this->render_html('footer');

			$this->load->view('auth/page-recover-password', $data);
        }

        function mail()
        {
        	$this->load->library('kmail');
        	$this->kmail->smtp();
        }
    }
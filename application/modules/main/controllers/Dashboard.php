<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends KANG_controller {

	function __construct()
	{
		parent::__construct();
	}

	function index() {
		$data["header"] = $this->render_html('header');
		$data["footer"] = $this->render_html('footer');

		$this->load->view('dashboard', $data);
	}

	function view_config()
	{	
		echo "<pre>";
		print_r($this->config->item("assets_default"));
	}

	function test_vue(){
		$data["header"] = $this->render_html('header', array(
			'title' => 'Dashboard',
			'js' => array(
				'corejs/vue/vue.js'
			)
		) );

		$data["footer"] = $this->render_html('footer', array(
			'js' => array(
				'modules/main/test_vue.js'
			)
		) );

		$this->load->view('test_vue', $data);
	}
}
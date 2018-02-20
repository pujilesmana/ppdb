<?php


class Main extends CI_Controller {
	
	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		// $this->login();
	}

	// public function login()
	// {
	// 	$this->load->view('login');
	// }
	
	// public function register()
	// {
	// 	$this->load->view('registrasi');
	// }

	function _remap($action){
		if($action == 1){
			$this->loginproses();
		}
		else{
			$this->load->view('login.php');
		}
	}

	public function loginproses(){
		echo 1;
	}
	
}

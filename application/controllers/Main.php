<?php


class Main extends CI_Controller {
	
	function __construct(){
		parent::__construct();
	}


	public function index()
	{
		$this->login();
	}

	public function login()
	{
		$this->load->view('login');
	}
	
	public function register()
	{
		$this->load->view('registrasi');
	}
	
}

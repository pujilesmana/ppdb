<?php


class Main extends CI_Controller {
	
	var $modelAccount;

	function __construct(){
		parent::__construct();
		$this->modelAccount = new Account();
	}



	function _remap($action){
		if($action == 1){
			$this->loginproses();
		}
		else if($action == 2){
			$this->load->view('registrasi.php');
		}
		else{
			$this->load->view('login.php');
		}
	}

	public function index()
	{
		// $this->login();
	}

	public function loginproses(){
		
		$nisn = $_POST["nisn"];
		$pass = $_POST["pass"];

		if($this->Account->readLogin($nisn,$pass) > 0){ // cek apakah user terdapat didatabase
			$row = $this->Account->read("*","WHERE nisn='".$nisn."'");
			$datasession = array("nisn"=>$row->nisn,
								 "username"=>$row->username,
								 "tipe_account"=>$row->tipe_account);
			$this->session->set_userdata($datasession); //aktif session
		}

       if($this->Account->readLogin($nisn,$pass) == 1 && $this->session->userdata("tipe_account") == 2){
          echo 1;
       }
	}
	
}

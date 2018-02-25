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
		else if($action == 3){
			$this->registerprocess();
		}
		else{
			if($this->session->userdata('nisn') != null){
				echo $this->session->userdata('nisn');
				if($this->session->userdata('tipe_account') == 1){
					$this->modelAccount->fillAllData($this->session->userdata('nisn'),$this->session->userdata('username'),$this->session->userdata('tipe_account'));

					redirect("Admin");
				}
				else if($this->session->userdata('tipe_account') == 2){
					$this->modelAccount->fillAllData($this->session->userdata('nisn'),$this->session->userdata('username'),$this->session->userdata('tipe_account'));
					redirect("User");
				}
			}
			else{
				$this->load->view('login.php');
			}
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

       if($this->Account->readLogin($nisn,$pass) == 1 && $this->session->userdata("tipe_account") == 1){
          echo 1;
       }
       else if($this->Account->readLogin($nisn,$pass) == 1 && $this->session->userdata("tipe_account") == 2){
       	echo 2;
       }
	}

	public function registerprocess(){ 
		$nisn	= $this->input->post('nisn');
		$nama 	= $this->input->post('nama');
		$password 	= $this->input->post('password');
		$confirm_password 	= $this->input->post('confirm-password');
		$tipe_account = 2;

		 if($password == $confirm_password){
			$cek_nisn = $this->Account->read("*","WHERE nisn='".$nisn."'");
			if(count($cek_nisn) > 0){
				echo 0;
			}
			else{
				$this->Account->insert("nisn,username,password,tipe_account","'".$nisn."','".$nama."','".$password."',".$tipe_account);
				echo 1;
			}
		}
		else{
			echo 2;
		}				
	}

	public function required_input($input_names){
		$rules = [];
		foreach ($input_names as $input){
		   	$rules []= [
		    'field'  => $input,
		    'label'  => ucfirst($input),
		    'rules'  => 'required'
		   ];
		}
		return $this->validate($rules);
	}

	public function validate($conf){
		$this->load->library('form_validation');
		$this->form_validation->set_rules($conf);
		return $this->form_validation->run();
	}
	
}

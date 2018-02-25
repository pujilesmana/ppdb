<?php
	
	class User extends CI_Controller{

		function __construct(){
			parent::__construct(); 
			$this->modelAccount = new Account();
			$this->modelAccount->fillAllData($this->session->userdata("nisn"),$this->session->userdata("username"),$this->session->userdata("tipe_account"));
		}

		function _remap($action){
			if($this->session->userdata('nisn') != "" && $this->session->userdata('tipe_account') == 2){
				if($action == 1){
					$this->logoutProses();
				}
				else{
					$this->home();
				}
			}
			else{
				redirect();
			}
		}

		public function home(){
			$this->load->view("user/home.php");
		}

		public function logoutProses(){
			$this->session->sess_destroy();
			redirect();
		}
	}
?>